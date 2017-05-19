<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dialog StructType
 * @subpackage Structs
 */
class Dialog extends AbstractStructBase
{
    /**
     * The title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $title;
    /**
     * The message
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $message;
    /**
     * Constructor method for dialog
     * @uses Dialog::setTitle()
     * @uses Dialog::setMessage()
     * @param string $title
     * @param string $message
     */
    public function __construct($title = null, $message = null)
    {
        $this
            ->setTitle($title)
            ->setMessage($message);
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Signicat\DocumentServiceV3_API\StructType\Dialog
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->title = $title;
        return $this;
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Signicat\DocumentServiceV3_API\StructType\Dialog
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->message = $message;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Dialog
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
