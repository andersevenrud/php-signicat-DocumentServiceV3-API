<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for form-param StructType
 * @subpackage Structs
 */
class Form_param extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $name;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $value;
    /**
     * Constructor method for form-param
     * @uses Form_param::setName()
     * @uses Form_param::setValue()
     * @param string $name
     * @param string $value
     */
    public function __construct($name = null, $value = null)
    {
        $this
            ->setName($name)
            ->setValue($value);
    }
    /**
     * Get name value
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Signicat\DocumentServiceV3_API\StructType\Form_param
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get value value
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Signicat\DocumentServiceV3_API\StructType\Form_param
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Form_param
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
