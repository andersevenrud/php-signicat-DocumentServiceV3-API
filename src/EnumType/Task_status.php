<?php

namespace Signicat\DocumentServiceV3_API\EnumType;

/**
 * This class stands for task-status EnumType
 * @subpackage Enumerations
 */
class Task_status
{
    /**
     * Constant for value 'created'
     * @return string 'created'
     */
    const VALUE_CREATED = 'created';
    /**
     * Constant for value 'completed'
     * @return string 'completed'
     */
    const VALUE_COMPLETED = 'completed';
    /**
     * Constant for value 'rejected'
     * @return string 'rejected'
     */
    const VALUE_REJECTED = 'rejected';
    /**
     * Constant for value 'expired'
     * @return string 'expired'
     */
    const VALUE_EXPIRED = 'expired';
    /**
     * Constant for value 'deleted'
     * @return string 'deleted'
     */
    const VALUE_DELETED = 'deleted';
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
     * @uses self::VALUE_CREATED
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_REJECTED
     * @uses self::VALUE_EXPIRED
     * @uses self::VALUE_DELETED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CREATED,
            self::VALUE_COMPLETED,
            self::VALUE_REJECTED,
            self::VALUE_EXPIRED,
            self::VALUE_DELETED,
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
