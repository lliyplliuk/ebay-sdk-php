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

use lliyplliuk\eBaySDK\Account\Types\UpdateAReturnPolicyRestResponse;

class UpdateAReturnPolicyRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateAReturnPolicyRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Account\Types\UpdateAReturnPolicyRestResponse', $this->obj);
    }

    public function testExtendsSetReturnPolicyResponse()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Account\Types\SetReturnPolicyResponse', $this->obj);
    }
}
