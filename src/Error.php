<?php namespace SSB\Api;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Log;
use App;

class Error
{
    function __construct($e = null, $context = [])
    {
        if (!App::environment('production')) {
            $logContext = $context;

            $message = 'Undefined';

            if ($e !== null) {
                $logContext['trace'] = $e->getTrace();
                $message = $e->getMessage();
            }

            Log::error($message, $logContext);

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