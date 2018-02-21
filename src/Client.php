<?php namespace SSB\Api;

use GuzzleHttp\Client as GuzzleClient;

class Client
{
    const API_VERSION = 'v1';

    public $apiUrl = '';
    public $privateKey = '';

    public $debug = false;
    static public $debugData = [];

    public function __construct(string $apiUrl, string $privateKey, bool $debug = false)
    {
        $this->apiUrl = $apiUrl;
        $this->privateKey = $privateKey;
        $this->debug = $debug;
    }

    public function get(string $resource, array $parameter = [])
    {
        return $this->makeRequest('GET', $resource, $parameter);
    }

    public function post(string $resource, array $parameter)
    {
        return $this->makeRequest('POST', $resource, [], $parameter);
    }

    public function patch(string $resource, array $parameter)
    {
        return $this->makeRequest('PATCH', $resource, [], $parameter);
    }

    private function makeRequest(string $method, string $resource, array $parameter, $postParameter = [])
    {
        // validate request
        foreach ($parameter as $key => $value) {
            if ($value === '') {
                return [];
            }
        }

        if ($this->debug) {
            $start = microtime(true);
        }

        $timestamp = time();
        $signature = $this->makeSignature(http_build_query($parameter + $postParameter), $timestamp);

        $client = new GuzzleClient(['base_uri' => $this->apiUrl]);

        try {
            $requestQuery = http_build_query(array_merge(
                $parameter,
                ['timestamp' => $timestamp, 'signature' => $signature]
            ));

            $url = self::API_VERSION . "/$resource?$requestQuery";
            $response = $client->request(
                $method,
                $url,
                $method !== 'GET' ? ['json' => $postParameter] : []
            );

            if ($this->debug) {
                self::$debugData[] = [
                    'start' => $start,
                    'end' => microtime(true),
                    'url' => $url,
                    'params' => $parameter,
                    'postParams' => $postParameter
                ];
            }

            $content = json_decode($response->getBody());

            if (is_array($content)) {
                $arr = [];
                foreach ($content as $c) {
                    $arr[] = ObjectSerializer::deserialize($c, '\\SSB\\Api\\Model\\' . $c->class, []);
                }
                return $arr;
            }
            else if (is_object($content) && isset($content->class)) {
                return ObjectSerializer::deserialize($content, '\\SSB\\Api\\Model\\' . $content->class, []);
            }
            else {
                return $content;
            }
        }
        catch (\Exception $exception) {
           new Error($exception, [
               'version' => self::API_VERSION,
               'resource' => $resource,
               'params' => $parameter,
               'postParams' => $postParameter,
               'timestamp' => $timestamp,
           ]);
        }

        return [];
    }

    private function makeSignature(string $query, int $timestamp): string
    {
        return base64_encode(hash('sha256', $query . $this->privateKey . $timestamp));
    }
}