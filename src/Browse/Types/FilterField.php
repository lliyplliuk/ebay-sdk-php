<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\Browse\Types;

/**
 *
 * @property string $field
 * @property boolean $negated
 * @property \lliyplliuk\eBaySDK\Browse\Types\RangeValue $range
 * @property string[] $set
 * @property string $value
 */
class FilterField extends \lliyplliuk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'field' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'field'
        ],
        'negated' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'negated'
        ],
        'range' => [
            'type' => 'lliyplliuk\eBaySDK\Browse\Types\RangeValue',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'range'
        ],
        'set' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'set'
        ],
        'value' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'value'
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
