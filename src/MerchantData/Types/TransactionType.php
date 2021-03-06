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
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\AmountType $AmountPaid
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\AmountType $AdjustmentAmount
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\AmountType $ConvertedAdjustmentAmount
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\UserType $Buyer
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\ShippingDetailsType $ShippingDetails
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\AmountType $ConvertedAmountPaid
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\AmountType $ConvertedTransactionPrice
 * @property \DateTime $CreatedDate
 * @property \lliyplliuk\eBaySDK\MerchantData\Enums\DepositTypeCodeType $DepositType
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\ItemType $Item
 * @property integer $QuantityPurchased
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\TransactionStatusType $Status
 * @property string $TransactionID
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\AmountType $TransactionPrice
 * @property boolean $BestOfferSale
 * @property integer $VATPercent
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\ExternalTransactionType[] $ExternalTransaction
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\SellingManagerProductDetailsType $SellingManagerProductDetails
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\ShippingServiceOptionsType $ShippingServiceSelected
 * @property \lliyplliuk\eBaySDK\MerchantData\Enums\PaidStatusCodeType $BuyerPaidStatus
 * @property \lliyplliuk\eBaySDK\MerchantData\Enums\PaidStatusCodeType $SellerPaidStatus
 * @property \DateTime $PaidTime
 * @property \DateTime $ShippedTime
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\AmountType $TotalPrice
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\FeedbackInfoType $FeedbackLeft
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\FeedbackInfoType $FeedbackReceived
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\OrderType $ContainingOrder
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\AmountType $FinalValueFee
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\RefundArrayType $RefundArray
 * @property \lliyplliuk\eBaySDK\MerchantData\Enums\SiteCodeType $TransactionSiteID
 * @property \lliyplliuk\eBaySDK\MerchantData\Enums\TransactionPlatformCodeType $Platform
 * @property string $CartID
 * @property boolean $SellerContactBuyerByEmail
 * @property string $PayPalEmailAddress
 * @property string $PaisaPayID
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\AmountType $BuyerGuaranteePrice
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\VariationType $Variation
 * @property string $BuyerCheckoutMessage
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\TaxesType $Taxes
 * @property boolean $BundlePurchase
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\AmountType $ActualShippingCost
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\AmountType $ActualHandlingCost
 * @property string $OrderLineItemID
 * @property string $eBayPaymentID
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\PaymentHoldDetailType $PaymentHoldDetails
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\SellerDiscountsType $SellerDiscounts
 * @property string $CodiceFiscale
 * @property boolean $IsMultiLegShipping
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\MultiLegShippingDetailsType $MultiLegShippingDetails
 * @property \DateTime $InvoiceSentTime
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\UnpaidItemType $UnpaidItem
 * @property boolean $IntangibleItem
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\PaymentsInformationType $MonetaryDetails
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\PickupDetailsType $PickupDetails
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\PickupMethodSelectedType $PickupMethodSelected
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\AmountType $ShippingConvenienceCharge
 * @property string $LogisticsPlanType
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\BuyerPackageEnclosuresType $BuyerPackageEnclosures
 * @property string $InventoryReservationID
 * @property string $ExtendedOrderID
 * @property boolean $eBayPlusTransaction
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\GiftSummaryType $GiftSummary
 * @property \lliyplliuk\eBaySDK\MerchantData\Types\DigitalDeliverySelectedType $DigitalDeliverySelected
 * @property boolean $Gift
 * @property boolean $GuaranteedShipping
 */
class TransactionType extends \lliyplliuk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AmountPaid' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountPaid'
        ],
        'AdjustmentAmount' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ],
        'ConvertedAdjustmentAmount' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedAdjustmentAmount'
        ],
        'Buyer' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\UserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Buyer'
        ],
        'ShippingDetails' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\ShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ],
        'ConvertedAmountPaid' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedAmountPaid'
        ],
        'ConvertedTransactionPrice' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedTransactionPrice'
        ],
        'CreatedDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreatedDate'
        ],
        'DepositType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DepositType'
        ],
        'Item' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\ItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Item'
        ],
        'QuantityPurchased' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityPurchased'
        ],
        'Status' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\TransactionStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ],
        'TransactionID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ],
        'TransactionPrice' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionPrice'
        ],
        'BestOfferSale' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferSale'
        ],
        'VATPercent' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VATPercent'
        ],
        'ExternalTransaction' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\ExternalTransactionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExternalTransaction'
        ],
        'SellingManagerProductDetails' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\SellingManagerProductDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductDetails'
        ],
        'ShippingServiceSelected' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\ShippingServiceOptionsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceSelected'
        ],
        'BuyerPaidStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerPaidStatus'
        ],
        'SellerPaidStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerPaidStatus'
        ],
        'PaidTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaidTime'
        ],
        'ShippedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ],
        'TotalPrice' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalPrice'
        ],
        'FeedbackLeft' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\FeedbackInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackLeft'
        ],
        'FeedbackReceived' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\FeedbackInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackReceived'
        ],
        'ContainingOrder' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\OrderType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ContainingOrder'
        ],
        'FinalValueFee' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FinalValueFee'
        ],
        'ListingCheckoutRedirectPreference' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingCheckoutRedirectPreference'
        ],
        'RefundArray' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\RefundArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundArray'
        ],
        'TransactionSiteID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionSiteID'
        ],
        'Platform' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Platform'
        ],
        'CartID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CartID'
        ],
        'SellerContactBuyerByEmail' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerContactBuyerByEmail'
        ],
        'PayPalEmailAddress' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalEmailAddress'
        ],
        'PaisaPayID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayID'
        ],
        'BuyerGuaranteePrice' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteePrice'
        ],
        'Variation' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\VariationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Variation'
        ],
        'BuyerCheckoutMessage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerCheckoutMessage'
        ],
        'Taxes' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\TaxesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Taxes'
        ],
        'BundlePurchase' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BundlePurchase'
        ],
        'ActualShippingCost' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActualShippingCost'
        ],
        'ActualHandlingCost' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActualHandlingCost'
        ],
        'OrderLineItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
        ],
        'eBayPaymentID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayPaymentID'
        ],
        'PaymentHoldDetails' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\PaymentHoldDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldDetails'
        ],
        'SellerDiscounts' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\SellerDiscountsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerDiscounts'
        ],
        'CodiceFiscale' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CodiceFiscale'
        ],
        'IsMultiLegShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IsMultiLegShipping'
        ],
        'MultiLegShippingDetails' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\MultiLegShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MultiLegShippingDetails'
        ],
        'InvoiceSentTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvoiceSentTime'
        ],
        'UnpaidItem' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\UnpaidItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItem'
        ],
        'IntangibleItem' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IntangibleItem'
        ],
        'MonetaryDetails' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\PaymentsInformationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MonetaryDetails'
        ],
        'PickupDetails' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\PickupDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupDetails'
        ],
        'PickupMethodSelected' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\PickupMethodSelectedType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupMethodSelected'
        ],
        'ShippingConvenienceCharge' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingConvenienceCharge'
        ],
        'LogisticsPlanType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LogisticsPlanType'
        ],
        'BuyerPackageEnclosures' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\BuyerPackageEnclosuresType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerPackageEnclosures'
        ],
        'InventoryReservationID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InventoryReservationID'
        ],
        'ExtendedOrderID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExtendedOrderID'
        ],
        'eBayPlusTransaction' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayPlusTransaction'
        ],
        'GiftSummary' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\GiftSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GiftSummary'
        ],
        'DigitalDeliverySelected' => [
            'type' => 'lliyplliuk\eBaySDK\MerchantData\Types\DigitalDeliverySelectedType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DigitalDeliverySelected'
        ],
        'Gift' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Gift'
        ],
        'GuaranteedShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GuaranteedShipping'
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
