<?php
namespace lliyplliuk\eBaySDK\Test\OAuth\Types;

use lliyplliuk\eBaySDK\OAuth\Types\GetUserTokenRestRequest;

class GetUserTokenRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetUserTokenRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\OAuth\Types\GetUserTokenRestRequest', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testProperties()
    {
        $this->obj->grant_type = 'foo';
        $this->obj->redirect_uri = 'bar';
        $this->obj->code = 'baz';

        $this->assertEquals('foo', $this->obj->grant_type);
        $this->assertEquals('bar', $this->obj->redirect_uri);
        $this->assertEquals('baz', $this->obj->code);
    }
}
