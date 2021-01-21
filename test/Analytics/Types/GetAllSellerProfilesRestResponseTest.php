<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Test\Analytics\Types;

use lliyplliuk\eBaySDK\Analytics\Types\GetAllSellerProfilesRestResponse;

class GetAllSellerProfilesRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetAllSellerProfilesRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Analytics\Types\GetAllSellerProfilesRestResponse', $this->obj);
    }

    public function testExtendsFindSellerStandardsProfilesResponse()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Analytics\Types\FindSellerStandardsProfilesResponse', $this->obj);
    }
}
