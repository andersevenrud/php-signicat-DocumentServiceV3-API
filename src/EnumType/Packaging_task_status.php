<?php

namespace Signicat\DocumentServiceV3_API\EnumType;

/**
 * This class stands for packaging-task-status EnumType
 * @subpackage Enumerations
 */
class Packaging_task_status
{
    /**
     * Constant for value 'created'
     * @return string 'created'
     */
    const VALUE_CREATED = 'created';
    /**
     * Constant for value 'failed'
     * @return string 'failed'
     */
    const VALUE_FAILED = 'failed';
    /**
     * Constant for value 'completed'
     * @return string 'completed'
     */
    const VALUE_COMPLETED = 'completed';
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
     * @uses self::VALUE_FAILED
     * @uses self::VALUE_COMPLETED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CREATED,
            self::VALUE_FAILED,
            self::VALUE_COMPLETED,
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
