<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\PostOrder\Types;

/**
 *
 * @property \lliyplliuk\eBaySDK\PostOrder\Types\ReturnAddressType $buyerAddress
 * @property string $buyerLoginName
 * @property \lliyplliuk\eBaySDK\PostOrder\Types\ReturnCloseInfoType $closeInfo
 * @property \lliyplliuk\eBaySDK\PostOrder\Types\DispositionRuleDetailType[] $dispositionRuleDetail
 * @property \lliyplliuk\eBaySDK\PostOrder\Types\ReturnFileType[] $files
 * @property \lliyplliuk\eBaySDK\PostOrder\Types\ReturnHoldInfoType $holdInfo
 * @property \lliyplliuk\eBaySDK\PostOrder\Types\ItemDetailType $itemDetail
 * @property \lliyplliuk\eBaySDK\PostOrder\Enums\MarketplaceIdEnum $marketplaceId
 * @property \lliyplliuk\eBaySDK\PostOrder\Types\MoneyMovementDetailType[] $moneyMovementInfo
 * @property \lliyplliuk\eBaySDK\PostOrder\Types\RefundInfoType $refundInfo
 * @property \lliyplliuk\eBaySDK\PostOrder\Types\ShipmentType $replacementShipmentInfo
 * @property \lliyplliuk\eBaySDK\PostOrder\Types\ReturnResponseHistoryType[] $responseHistory
 * @property \lliyplliuk\eBaySDK\PostOrder\Types\ShipmentType $returnShipmentInfo
 * @property string $RMANumber
 * @property \lliyplliuk\eBaySDK\PostOrder\Types\ReturnAddressType $sellerAddress
 * @property string $sellerLoginName
 */
class ReturnDetailType extends \lliyplliuk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyerAddress' => [
            'type' => 'lliyplliuk\eBaySDK\PostOrder\Types\ReturnAddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerAddress'
        ],
        'buyerLoginName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerLoginName'
        ],
        'closeInfo' => [
            'type' => 'lliyplliuk\eBaySDK\PostOrder\Types\ReturnCloseInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'closeInfo'
        ],
        'dispositionRuleDetail' => [
            'type' => 'lliyplliuk\eBaySDK\PostOrder\Types\DispositionRuleDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'dispositionRuleDetail'
        ],
        'files' => [
            'type' => 'lliyplliuk\eBaySDK\PostOrder\Types\ReturnFileType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'files'
        ],
        'holdInfo' => [
            'type' => 'lliyplliuk\eBaySDK\PostOrder\Types\ReturnHoldInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'holdInfo'
        ],
        'itemDetail' => [
            'type' => 'lliyplliuk\eBaySDK\PostOrder\Types\ItemDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemDetail'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'moneyMovementInfo' => [
            'type' => 'lliyplliuk\eBaySDK\PostOrder\Types\MoneyMovementDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'moneyMovementInfo'
        ],
        'refundInfo' => [
            'type' => 'lliyplliuk\eBaySDK\PostOrder\Types\RefundInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundInfo'
        ],
        'replacementShipmentInfo' => [
            'type' => 'lliyplliuk\eBaySDK\PostOrder\Types\ShipmentType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'replacementShipmentInfo'
        ],
        'responseHistory' => [
            'type' => 'lliyplliuk\eBaySDK\PostOrder\Types\ReturnResponseHistoryType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'responseHistory'
        ],
        'returnShipmentInfo' => [
            'type' => 'lliyplliuk\eBaySDK\PostOrder\Types\ShipmentType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnShipmentInfo'
        ],
        'RMANumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RMANumber'
        ],
        'sellerAddress' => [
            'type' => 'lliyplliuk\eBaySDK\PostOrder\Types\ReturnAddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerAddress'
        ],
        'sellerLoginName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerLoginName'
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
