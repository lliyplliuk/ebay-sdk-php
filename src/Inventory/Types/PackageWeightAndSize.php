<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Inventory\Types;

/**
 *
 * @property \lliyplliuk\eBaySDK\Inventory\Types\Dimension $dimensions
 * @property \lliyplliuk\eBaySDK\Inventory\Enums\PackageTypeEnum $packageType
 * @property \lliyplliuk\eBaySDK\Inventory\Types\Weight $weight
 */
class PackageWeightAndSize extends \lliyplliuk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'dimensions' => [
            'type' => 'lliyplliuk\eBaySDK\Inventory\Types\Dimension',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dimensions'
        ],
        'packageType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'packageType'
        ],
        'weight' => [
            'type' => 'lliyplliuk\eBaySDK\Inventory\Types\Weight',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'weight'
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
