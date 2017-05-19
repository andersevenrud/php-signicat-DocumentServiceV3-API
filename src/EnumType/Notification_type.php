<?php

namespace Signicat\DocumentServiceV3_API\EnumType;

/**
 * This class stands for notification-type EnumType
 * @subpackage Enumerations
 */
class Notification_type
{
    /**
     * Constant for value 'SMS'
     * @return string 'SMS'
     */
    const VALUE_SMS = 'SMS';
    /**
     * Constant for value 'EMAIL'
     * @return string 'EMAIL'
     */
    const VALUE_EMAIL = 'EMAIL';
    /**
     * Constant for value 'URL'
     * @return string 'URL'
     */
    const VALUE_URL = 'URL';
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
     * @uses self::VALUE_SMS
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_URL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SMS,
            self::VALUE_EMAIL,
            self::VALUE_URL,
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
