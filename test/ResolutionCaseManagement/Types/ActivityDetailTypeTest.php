<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Test\ResolutionCaseManagement\Types;

use lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ActivityDetailType;

class ActivityDetailTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ActivityDetailType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ActivityDetailType', $this->obj);
    }

    public function testExtendsEnumerationDetailType()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\EnumerationDetailType', $this->obj);
    }
}
