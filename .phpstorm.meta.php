<?php
// @formatter:off

namespace PHPSTORM_META {
    registerArgumentsSet(
        'apiEndpoints',
        'article',
        'code',
        'codeless',
        'codepool',
        'conditionset',
        'newsletter',
        'paymentmethod',
        'purchase',
        'recommendation',
        'shippingcost'
    );

    expectedArguments(
        \SSB\Api\Client::get(),
        0,
        argumentsSet('apiEndpoints')
    );

    expectedArguments(
        \SSB\Api\Client::post(),
        0,
        argumentsSet('apiEndpoints')
    );

    expectedArguments(
        \SSB\Api\Client::patch(),
        0,
        argumentsSet('apiEndpoints')
    );
}