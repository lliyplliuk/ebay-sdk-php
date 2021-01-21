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
 * @property \lliyplliuk\eBaySDK\Trading\Types\CountryDetailsType[] $CountryDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\CurrencyDetailsType[] $CurrencyDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\DispatchTimeMaxDetailsType[] $DispatchTimeMaxDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\PaymentOptionDetailsType[] $PaymentOptionDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\RegionDetailsType[] $RegionDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\ShippingLocationDetailsType[] $ShippingLocationDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\ShippingServiceDetailsType[] $ShippingServiceDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\SiteDetailsType[] $SiteDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\TaxJurisdictionType[] $TaxJurisdiction
 * @property \lliyplliuk\eBaySDK\Trading\Types\URLDetailsType[] $URLDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\TimeZoneDetailsType[] $TimeZoneDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\ItemSpecificDetailsType[] $ItemSpecificDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\RegionOfOriginDetailsType[] $RegionOfOriginDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\ShippingPackageDetailsType[] $ShippingPackageDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\ShippingCarrierDetailsType[] $ShippingCarrierDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\ReturnPolicyDetailsType $ReturnPolicyDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\ListingStartPriceDetailsType[] $ListingStartPriceDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\SiteBuyerRequirementDetailsType[] $BuyerRequirementDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\ListingFeatureDetailsType[] $ListingFeatureDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\VariationDetailsType $VariationDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\ExcludeShippingLocationDetailsType[] $ExcludeShippingLocationDetails
 * @property \DateTime $UpdateTime
 * @property \lliyplliuk\eBaySDK\Trading\Types\RecoupmentPolicyDetailsType[] $RecoupmentPolicyDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\ShippingCategoryDetailsType[] $ShippingCategoryDetails
 * @property \lliyplliuk\eBaySDK\Trading\Types\ProductDetailsType $ProductDetails
 */
class GeteBayDetailsResponseType extends \lliyplliuk\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CountryDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\CountryDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'CountryDetails'
        ],
        'CurrencyDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\CurrencyDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'CurrencyDetails'
        ],
        'DispatchTimeMaxDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\DispatchTimeMaxDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DispatchTimeMaxDetails'
        ],
        'PaymentOptionDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\PaymentOptionDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentOptionDetails'
        ],
        'RegionDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\RegionDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'RegionDetails'
        ],
        'ShippingLocationDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\ShippingLocationDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingLocationDetails'
        ],
        'ShippingServiceDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\ShippingServiceDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceDetails'
        ],
        'SiteDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\SiteDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SiteDetails'
        ],
        'TaxJurisdiction' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\TaxJurisdictionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'TaxJurisdiction'
        ],
        'URLDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\URLDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'URLDetails'
        ],
        'TimeZoneDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\TimeZoneDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'TimeZoneDetails'
        ],
        'ItemSpecificDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\ItemSpecificDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ItemSpecificDetails'
        ],
        'RegionOfOriginDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\RegionOfOriginDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'RegionOfOriginDetails'
        ],
        'ShippingPackageDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\ShippingPackageDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingPackageDetails'
        ],
        'ShippingCarrierDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\ShippingCarrierDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingCarrierDetails'
        ],
        'ReturnPolicyDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\ReturnPolicyDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyDetails'
        ],
        'ListingStartPriceDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\ListingStartPriceDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ListingStartPriceDetails'
        ],
        'BuyerRequirementDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\SiteBuyerRequirementDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'BuyerRequirementDetails'
        ],
        'ListingFeatureDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\ListingFeatureDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ListingFeatureDetails'
        ],
        'VariationDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\VariationDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VariationDetails'
        ],
        'ExcludeShippingLocationDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\ExcludeShippingLocationDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShippingLocationDetails'
        ],
        'UpdateTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
        ],
        'RecoupmentPolicyDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\RecoupmentPolicyDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'RecoupmentPolicyDetails'
        ],
        'ShippingCategoryDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\ShippingCategoryDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingCategoryDetails'
        ],
        'ProductDetails' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\ProductDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProductDetails'
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
