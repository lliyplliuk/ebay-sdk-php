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

use lliyplliuk\eBaySDK\Shopping\Types\PopularSearchesType;

class PopularSearchesTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PopularSearchesType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Shopping\Types\PopularSearchesType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Types\BaseType', $this->obj);
    }
}
