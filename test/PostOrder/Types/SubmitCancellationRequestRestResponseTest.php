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

use lliyplliuk\eBaySDK\PostOrder\Types\SubmitCancellationRequestRestResponse;

class SubmitCancellationRequestRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SubmitCancellationRequestRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\PostOrder\Types\SubmitCancellationRequestRestResponse', $this->obj);
    }

    public function testExtendsCreateCancelResponse()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\PostOrder\Types\CreateCancelResponse', $this->obj);
    }
}
