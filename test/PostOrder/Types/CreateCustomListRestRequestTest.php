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

use lliyplliuk\eBaySDK\PostOrder\Types\CreateCustomListRestRequest;

class CreateCustomListRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateCustomListRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\PostOrder\Types\CreateCustomListRestRequest', $this->obj);
    }

    public function testExtendsCreateCustomListRequest()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\PostOrder\Types\CreateCustomListRequest', $this->obj);
    }
}
