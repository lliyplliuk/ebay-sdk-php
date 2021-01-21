<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Test\BulkDataExchange\Types;

use lliyplliuk\eBaySDK\BulkDataExchange\Types\StartUploadJobResponse;

class StartUploadJobResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StartUploadJobResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\BulkDataExchange\Types\StartUploadJobResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\BulkDataExchange\Types\BaseServiceResponse', $this->obj);
    }
}
