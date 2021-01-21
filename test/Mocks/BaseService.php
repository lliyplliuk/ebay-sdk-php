<?php
namespace lliyplliuk\eBaySDK\Test\Mocks;

class BaseService extends \lliyplliuk\eBaySDK\Services\BaseService
{
    public function __construct(array $config)
    {
        parent::__construct('http://production.com', 'http://sandbox.com', $config);
    }

    protected function getEbayHeaders($operationName)
    {
        return ['fooHdr' => $operationName];
    }
}
