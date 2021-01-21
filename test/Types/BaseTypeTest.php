<?php
namespace lliyplliuk\eBaySDK\Types\Test;

use lliyplliuk\eBaySDK\Types\BaseType;

class BaseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BaseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Types\BaseType', $this->obj);
    }
}
