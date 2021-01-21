<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Feedback\Types;

/**
 *
 * @property \lliyplliuk\eBaySDK\Feedback\Types\DateRange $dateRange
 * @property string $dateRangeEventType
 * @property string $shippingCostType
 * @property string $shippingDestinationType
 * @property string[] $shipToCountry
 * @property string[] $shippingService
 */
class CreateDSRSummaryByShippingDetailRequest extends \lliyplliuk\eBaySDK\Feedback\Types\BaseServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'dateRange' => [
            'type' => 'lliyplliuk\eBaySDK\Feedback\Types\DateRange',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dateRange'
        ],
        'dateRangeEventType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dateRangeEventType'
        ],
        'shippingCostType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingCostType'
        ],
        'shippingDestinationType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingDestinationType'
        ],
        'shipToCountry' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shipToCountry'
        ],
        'shippingService' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shippingService'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'createDSRSummaryByShippingDetailRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
