<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Test\Trading\Types;

use lliyplliuk\eBaySDK\Trading\Types\GetClientAlertsAuthTokenResponseType;

class GetClientAlertsAuthTokenResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetClientAlertsAuthTokenResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Trading\Types\GetClientAlertsAuthTokenResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Trading\Types\AbstractResponseType', $this->obj);
    }
}
