<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Test\Catalog\Types;

use lliyplliuk\eBaySDK\Catalog\Types\CategoryAspectValue;

class CategoryAspectValueTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CategoryAspectValue();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Catalog\Types\CategoryAspectValue', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Types\BaseType', $this->obj);
    }
}
