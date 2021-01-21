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

use lliyplliuk\eBaySDK\Catalog\Types\GetProductRestResponse;

class GetProductRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetProductRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Catalog\Types\GetProductRestResponse', $this->obj);
    }

    public function testExtendsProduct()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Catalog\Types\Product', $this->obj);
    }
}
