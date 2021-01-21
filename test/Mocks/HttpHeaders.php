<?php
namespace lliyplliuk\eBaySDK\Test\Mocks;

use lliyplliuk\eBaySDK\HttpHeadersTrait;

class HttpHeaders
{
    use HttpHeadersTrait;

    public function __construct(array $headers)
    {
        $this->setHeaders($headers);
    }
}
