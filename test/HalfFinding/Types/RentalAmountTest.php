<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Test\HalfFinding\Types;

use lliyplliuk\eBaySDK\HalfFinding\Types\RentalAmount;

class RentalAmountTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RentalAmount();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\HalfFinding\Types\RentalAmount', $this->obj);
    }

    public function testExtendsDoubleType()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Types\DoubleType', $this->obj);
    }
}
