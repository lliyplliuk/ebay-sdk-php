<?php
namespace lliyplliuk\eBaySDK\Test\Mocks;

use lliyplliuk\eBaySDK\StatusCodeTrait;

class StatusCode
{
    use StatusCodeTrait;

    public function __construct($statusCode)
    {
        $this->statusCode = $statusCode;
    }
}
