<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Test\PostOrder\Types;

use lliyplliuk\eBaySDK\PostOrder\Types\VoidShippingLabelRestRequest;

class VoidShippingLabelRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new VoidShippingLabelRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\PostOrder\Types\VoidShippingLabelRestRequest', $this->obj);
    }

    public function testExtendsVoidLabelRequest()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\PostOrder\Types\VoidLabelRequest', $this->obj);
    }
}
