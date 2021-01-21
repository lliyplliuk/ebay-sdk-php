<?php
namespace lliyplliuk\eBaySDK\Test\Trading\Mocks;

use lliyplliuk\eBaySDK\Trading\Types\GeteBayOfficialTimeRequestType;

class Service extends \lliyplliuk\eBaySDK\Trading\Services\TradingBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new GeteBayOfficialTimeRequestType(),
            '\lliyplliuk\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
