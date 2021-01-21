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

use lliyplliuk\eBaySDK\PostOrder\Types\GetReturnRuleHistoryRestResponse;

class GetReturnRuleHistoryRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetReturnRuleHistoryRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\PostOrder\Types\GetReturnRuleHistoryRestResponse', $this->obj);
    }

    public function testExtendsGetDispositionRuleTriggerHistResponse()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\PostOrder\Types\GetDispositionRuleTriggerHistResponse', $this->obj);
    }
}
