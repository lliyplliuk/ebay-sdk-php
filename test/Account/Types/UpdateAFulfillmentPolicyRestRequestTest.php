<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Test\Account\Types;

use lliyplliuk\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestRequest;

class UpdateAFulfillmentPolicyRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateAFulfillmentPolicyRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestRequest', $this->obj);
    }

    public function testExtendsFulfillmentPolicyRequest()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Account\Types\FulfillmentPolicyRequest', $this->obj);
    }
}
