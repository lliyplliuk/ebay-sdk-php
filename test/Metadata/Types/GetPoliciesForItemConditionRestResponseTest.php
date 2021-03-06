<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Test\Metadata\Types;

use lliyplliuk\eBaySDK\Metadata\Types\GetPoliciesForItemConditionRestResponse;

class GetPoliciesForItemConditionRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetPoliciesForItemConditionRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Metadata\Types\GetPoliciesForItemConditionRestResponse', $this->obj);
    }

    public function testExtendsItemConditionPolicyResponse()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Metadata\Types\ItemConditionPolicyResponse', $this->obj);
    }
}
