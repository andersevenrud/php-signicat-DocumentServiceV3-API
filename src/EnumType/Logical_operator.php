<?php

namespace Signicat\DocumentServiceV3_API\EnumType;

/**
 * This class stands for logical-operator EnumType
 * @subpackage Enumerations
 */
class Logical_operator
{
    /**
     * Constant for value 'equals'
     * @return string 'equals'
     */
    const VALUE_EQUALS = 'equals';
    /**
     * Constant for value 'not-equals'
     * @return string 'not-equals'
     */
    const VALUE_NOT_EQUALS = 'not-equals';
    /**
     * Constant for value 'contains'
     * @return string 'contains'
     */
    const VALUE_CONTAINS = 'contains';
    /**
     * Constant for value 'less-than'
     * @return string 'less-than'
     */
    const VALUE_LESS_THAN = 'less-than';
    /**
     * Constant for value 'greater-than'
     * @return string 'greater-than'
     */
    const VALUE_GREATER_THAN = 'greater-than';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_EQUALS
     * @uses self::VALUE_NOT_EQUALS
     * @uses self::VALUE_CONTAINS
     * @uses self::VALUE_LESS_THAN
     * @uses self::VALUE_GREATER_THAN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EQUALS,
            self::VALUE_NOT_EQUALS,
            self::VALUE_CONTAINS,
            self::VALUE_LESS_THAN,
            self::VALUE_GREATER_THAN,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
