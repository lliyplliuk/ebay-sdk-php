<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Marketing\Types;

/**
 *
 * @property string $description
 * @property \lliyplliuk\eBaySDK\Marketing\Types\DiscountRule[] $discountRules
 * @property string $endDate
 * @property \lliyplliuk\eBaySDK\Marketing\Types\InventoryCriterion $inventoryCriterion
 * @property \lliyplliuk\eBaySDK\Marketing\Enums\MarketplaceIdEnum $marketplaceId
 * @property string $name
 * @property \lliyplliuk\eBaySDK\Marketing\Enums\PromotionPriorityEnum $priority
 * @property string $promotionImageUrl
 * @property \lliyplliuk\eBaySDK\Marketing\Enums\PromotionStatusEnum $promotionStatus
 * @property string $startDate
 */
class ItemPromotion extends \lliyplliuk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'description'
        ],
        'discountRules' => [
            'type' => 'lliyplliuk\eBaySDK\Marketing\Types\DiscountRule',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'discountRules'
        ],
        'endDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'endDate'
        ],
        'inventoryCriterion' => [
            'type' => 'lliyplliuk\eBaySDK\Marketing\Types\InventoryCriterion',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inventoryCriterion'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'name'
        ],
        'priority' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priority'
        ],
        'promotionImageUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'promotionImageUrl'
        ],
        'promotionStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'promotionStatus'
        ],
        'startDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'startDate'
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
