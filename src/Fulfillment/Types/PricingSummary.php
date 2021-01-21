<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Fulfillment\Types;

/**
 *
 * @property \lliyplliuk\eBaySDK\Fulfillment\Types\Amount $adjustment
 * @property \lliyplliuk\eBaySDK\Fulfillment\Types\Amount $deliveryCost
 * @property \lliyplliuk\eBaySDK\Fulfillment\Types\Amount $deliveryDiscount
 * @property \lliyplliuk\eBaySDK\Fulfillment\Types\Amount $fee
 * @property \lliyplliuk\eBaySDK\Fulfillment\Types\Amount $priceDiscount
 * @property \lliyplliuk\eBaySDK\Fulfillment\Types\Amount $priceSubtotal
 * @property \lliyplliuk\eBaySDK\Fulfillment\Types\Amount $tax
 * @property \lliyplliuk\eBaySDK\Fulfillment\Types\Amount $total
 */
class PricingSummary extends \lliyplliuk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'adjustment' => [
            'type' => 'lliyplliuk\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'adjustment'
        ],
        'deliveryCost' => [
            'type' => 'lliyplliuk\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryCost'
        ],
        'deliveryDiscount' => [
            'type' => 'lliyplliuk\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryDiscount'
        ],
        'fee' => [
            'type' => 'lliyplliuk\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fee'
        ],
        'priceDiscount' => [
            'type' => 'lliyplliuk\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceDiscount'
        ],
        'priceSubtotal' => [
            'type' => 'lliyplliuk\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceSubtotal'
        ],
        'tax' => [
            'type' => 'lliyplliuk\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'tax'
        ],
        'total' => [
            'type' => 'lliyplliuk\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'total'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
