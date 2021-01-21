<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Trading\Types;

/**
 *
 * @property \lliyplliuk\eBaySDK\Trading\Enums\SellingManagerAutoRelistTypeCodeType $Type
 * @property \lliyplliuk\eBaySDK\Trading\Enums\SellingManagerAutoRelistOptionCodeType $RelistCondition
 * @property integer $RelistAfterDays
 * @property integer $RelistAfterHours
 * @property string $RelistAtSpecificTimeOfDay
 * @property \lliyplliuk\eBaySDK\Trading\Types\BestOfferDetailsType $BestOfferDetails
 * @property integer $ListingHoldInventoryLevel
 */
class SellingManagerAutoRelistType extends \lliyplliuk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Type' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Type'
        ],
        'RelistCondition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RelistCondition'
        ],
        'RelistAfterDays' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RelistAfterDays'
        ],
        'RelistAfterHours' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RelistAfterHours'
        ],
        'RelistAtSpecificTimeOfDay' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RelistAtSpecificTimeOfDay'
        ],
        'BestOfferDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\BestOfferDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferDetails'
        ],
        'ListingHoldInventoryLevel' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingHoldInventoryLevel'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
