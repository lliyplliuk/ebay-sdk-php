<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Merchandising\Types;

/**
 *
 * @property string $itemId
 * @property string[] $categoryId
 * @property string[] $categoryIdExclude
 * @property string $listingType
 * @property \DateTime $endTimeTo
 * @property \DateTime $endTimeFrom
 * @property \lliyplliuk\eBaySDK\Merchandising\Types\Amount $maxPrice
 * @property \lliyplliuk\eBaySDK\Merchandising\Types\ItemFilter[] $itemFilter
 */
class GetSimilarItemsRequest extends \lliyplliuk\eBaySDK\Merchandising\Types\BaseMerchandisingServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'itemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
        'categoryId' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categoryId'
        ],
        'categoryIdExclude' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categoryIdExclude'
        ],
        'listingType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listingType'
        ],
        'endTimeTo' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'endTimeTo'
        ],
        'endTimeFrom' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'endTimeFrom'
        ],
        'maxPrice' => [
            'type' => 'lliyplliuk\eBaySDK\Merchandising\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxPrice'
        ],
        'itemFilter' => [
            'type' => 'lliyplliuk\eBaySDK\Merchandising\Types\ItemFilter',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'itemFilter'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'getSimilarItemsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
