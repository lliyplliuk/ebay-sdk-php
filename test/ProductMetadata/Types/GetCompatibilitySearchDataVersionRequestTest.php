<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Test\ProductMetadata\Types;

use lliyplliuk\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionRequest;

class GetCompatibilitySearchDataVersionRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetCompatibilitySearchDataVersionRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\ProductMetadata\Types\BaseServiceRequest', $this->obj);
    }
}
