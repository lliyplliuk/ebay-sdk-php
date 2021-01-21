<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Test\PostOrder\Types;

use lliyplliuk\eBaySDK\PostOrder\Types\IssueCaseRefundRestResponse;

class IssueCaseRefundRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new IssueCaseRefundRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\PostOrder\Types\IssueCaseRefundRestResponse', $this->obj);
    }

    public function testExtendsVoluntaryRefundResponse()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\PostOrder\Types\VoluntaryRefundResponse', $this->obj);
    }
}
