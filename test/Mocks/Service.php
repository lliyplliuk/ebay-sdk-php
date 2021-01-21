<?php
namespace lliyplliuk\eBaySDK\Test\Mocks;

class Service extends \lliyplliuk\eBaySDK\Test\Mocks\BaseService
{
    public function __construct(array $config)
    {
        parent::__construct(
            $config + [
                'credentials' => [
                    'appId' => '',
                    'certId' => '',
                    'devId' => ''
                ]
            ]
        );
    }

    public function foo(\lliyplliuk\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            '\lliyplliuk\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }

    public function bar(\lliyplliuk\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            '\lliyplliuk\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
