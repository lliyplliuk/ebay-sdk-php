<?php
namespace lliyplliuk\eBaySDK\Test\PostOrder\Mocks;

use lliyplliuk\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \lliyplliuk\eBaySDK\PostOrder\Services\PostOrderBaseService
{
    protected static $operations = [
        'testOperation' => [
            'method' => 'GET',
            'resource' => 'item/{item_id}',
            'responseClass' => '\lliyplliuk\eBaySDK\Test\Mocks\ComplexClass',
            'params' => [
            ]
        ]
    ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync('testOperation', new ComplexClass())->wait();
    }
}
