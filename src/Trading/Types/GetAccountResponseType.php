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
 * @property string $AccountID
 * @property \lliyplliuk\eBaySDK\Trading\Types\AccountSummaryType $AccountSummary
 * @property \lliyplliuk\eBaySDK\Trading\Enums\CurrencyCodeType $Currency
 * @property \lliyplliuk\eBaySDK\Trading\Types\AccountEntriesType $AccountEntries
 * @property \lliyplliuk\eBaySDK\Trading\Types\PaginationResultType $PaginationResult
 * @property boolean $HasMoreEntries
 * @property integer $EntriesPerPage
 * @property integer $PageNumber
 */
class GetAccountResponseType extends \lliyplliuk\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AccountID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AccountID'
        ],
        'AccountSummary' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\AccountSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AccountSummary'
        ],
        'Currency' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Currency'
        ],
        'AccountEntries' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\AccountEntriesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AccountEntries'
        ],
        'PaginationResult' => [
            'type' => 'lliyplliuk\eBaySDK\Trading\Types\PaginationResultType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaginationResult'
        ],
        'HasMoreEntries' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HasMoreEntries'
        ],
        'EntriesPerPage' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EntriesPerPage'
        ],
        'PageNumber' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PageNumber'
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
