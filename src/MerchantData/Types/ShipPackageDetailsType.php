<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\MerchantData\Types;

/**
 *
 * @property \lliyplliuk\eBaySDK\MerchantData\Enums\MeasurementSystemCodeType $MeasurementUnit
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\MeasureType $PackageDepth
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\MeasureType $PackageLength
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\MeasureType $PackageWidth
 * @property boolean $ShippingIrregular
 * @property \lliyplliuk\eBaySDK\MerchantData\Enums\ShippingPackageCodeType $ShippingPackage
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\MeasureType $WeightMajor
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\MeasureType $WeightMinor
 */
class ShipPackageDetailsType extends \lliyplliuk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'MeasurementUnit' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MeasurementUnit'
        ],
        'PackageDepth' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageDepth'
        ],
        'PackageLength' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageLength'
        ],
        'PackageWidth' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageWidth'
        ],
        'ShippingIrregular' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingIrregular'
        ],
        'ShippingPackage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackage'
        ],
        'WeightMajor' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WeightMajor'
        ],
        'WeightMinor' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WeightMinor'
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
