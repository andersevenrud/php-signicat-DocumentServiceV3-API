<?php

namespace Signicat\DocumentServiceV3_API\EnumType;

/**
 * This class stands for document-action-type EnumType
 * @subpackage Enumerations
 */
class Document_action_type
{
    /**
     * Constant for value 'sign'
     * @return string 'sign'
     */
    const VALUE_SIGN = 'sign';
    /**
     * Constant for value 'view'
     * @return string 'view'
     */
    const VALUE_VIEW = 'view';
    /**
     * Constant for value 'upload'
     * @return string 'upload'
     */
    const VALUE_UPLOAD = 'upload';
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
     * @uses self::VALUE_SIGN
     * @uses self::VALUE_VIEW
     * @uses self::VALUE_UPLOAD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SIGN,
            self::VALUE_VIEW,
            self::VALUE_UPLOAD,
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
