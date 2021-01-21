<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Test\RelatedItemsManagement\Types;

use lliyplliuk\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesResponse;

class DeleteBundlesResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DeleteBundlesResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\RelatedItemsManagement\Types\BaseResponse', $this->obj);
    }
}
