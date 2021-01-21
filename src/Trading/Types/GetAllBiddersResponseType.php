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
 * @property \lliyplliuk\eBaySDK\Trading\Types\OfferArrayType $BidArray
 * @property string $HighBidder
 * @property \lliyplliuk\eBaySDK\Trading\Types\AmountType $HighestBid
 * @property \lliyplliuk\eBaySDK\Trading\Enums\ListingStatusCodeType $ListingStatus
 */
class GetAllBiddersResponseType extends \lliyplliuk\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BidArray' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\OfferArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidArray'
        ],
        'HighBidder' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HighBidder'
        ],
        'HighestBid' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HighestBid'
        ],
        'ListingStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingStatus'
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
