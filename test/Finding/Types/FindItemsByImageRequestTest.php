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

use lliyplliuk\eBaySDK\Finding\Types\FindItemsByImageRequest;

class FindItemsByImageRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FindItemsByImageRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Finding\Types\FindItemsByImageRequest', $this->obj);
    }

    public function testExtendsBestMatchFindingServiceRequest()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Finding\Types\BestMatchFindingServiceRequest', $this->obj);
    }
}
