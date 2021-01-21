<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Test\Shopping\Types;

use lliyplliuk\eBaySDK\Shopping\Types\ProductIDType;

class ProductIDTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProductIDType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Shopping\Types\ProductIDType', $this->obj);
    }

    public function testExtendsStringType()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Types\StringType', $this->obj);
    }
}
