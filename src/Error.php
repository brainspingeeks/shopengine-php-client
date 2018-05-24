<?php namespace SSB\Api;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

class Error
{
    function __construct($e = null, $context = [])
    {
        print_r($e->getMessage());
        die();

        if (!\App::environment('production')) {
            $logContext = $context;

            $message = 'Undefined';

            if ($e !== null) {
                $logContext['trace'] = $e->getTrace();
                $message = $e->getMessage();
            }

            \Log::error($message, $logContext);

            if (
                get_class($e) === ServerException::class ||
                get_class($e) === ClientException::class
            ) {
                die($e->getResponse()->getBody() . '');
            }
            else {
                dd([$context, $e]);
            }
        }

        try {
          app('sentry')->captureException($e, ['extra' => $context]);
        }
        catch (\Exception $e) {}
    }
}