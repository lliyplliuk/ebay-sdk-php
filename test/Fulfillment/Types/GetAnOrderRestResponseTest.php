<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Test\Fulfillment\Types;

use lliyplliuk\eBaySDK\Fulfillment\Types\GetAnOrderRestResponse;

class GetAnOrderRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetAnOrderRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Fulfillment\Types\GetAnOrderRestResponse', $this->obj);
    }

    public function testExtendsOrder()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Fulfillment\Types\Order', $this->obj);
    }
}
