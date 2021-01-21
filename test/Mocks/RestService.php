<?php
namespace lliyplliuk\eBaySDK\Test\Mocks;

class RestService extends \lliyplliuk\eBaySDK\Test\Mocks\BaseRestService
{
    protected static $operations =  [
        'foo' => [
            'method' => 'GET',
            'resource' => '',
            'responseClass' => '\lliyplliuk\eBaySDK\Test\Mocks\ComplexClass',
            'params' => [
            ]
        ]
    ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function foo(\lliyplliuk\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync('foo', $request)->wait();
    }
}
