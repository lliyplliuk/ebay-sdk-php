<?php
require __DIR__ . '/artifacts/ebay-sdk-php.phar';

$sdk = new \lliyplliuk\eBaySDK\Sdk();

$trading = new \lliyplliuk\eBaySDK\Trading\Services\TradingService([
    'siteId'      => 0,
    'credentials' => [
        'appId'  => 'secret',
        'certId' => 'secret',
        'devId'  => 'secret'
    ]
]);

echo 'Version=' . \lliyplliuk\eBaySDK\Sdk::VERSION;
