<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Test\Order\Types;

use lliyplliuk\eBaySDK\Order\Types\GetGuestPurchaseOrderRestResponse;

class GetGuestPurchaseOrderRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetGuestPurchaseOrderRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Order\Types\GetGuestPurchaseOrderRestResponse', $this->obj);
    }

    public function testExtendsGuestPurchaseOrder()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Order\Types\GuestPurchaseOrder', $this->obj);
    }
}
