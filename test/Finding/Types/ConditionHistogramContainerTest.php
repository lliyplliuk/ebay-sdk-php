<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Test\Finding\Types;

use lliyplliuk\eBaySDK\Finding\Types\ConditionHistogramContainer;

class ConditionHistogramContainerTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ConditionHistogramContainer();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Finding\Types\ConditionHistogramContainer', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Types\BaseType', $this->obj);
    }
}
