<?php
namespace lliyplliuk\eBaySDK\Test\HalfFinding\Mocks;

use lliyplliuk\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \lliyplliuk\eBaySDK\HalfFinding\Services\HalfFindingBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new ComplexClass(),
            '\lliyplliuk\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
