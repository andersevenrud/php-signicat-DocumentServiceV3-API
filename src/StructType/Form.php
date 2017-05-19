<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for form StructType
 * @subpackage Structs
 */
class Form extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $id;
    /**
     * The input_param
     */
    public $input_param;
    /**
     * Constructor method for form
     * @uses Form::setId()
     * @uses Form::setInput_param()
     * @param string $id
     * @param \Signicat\DocumentServiceV3_API\StructType\Form_param[] $input_param
     */
    public function __construct($id = null, array $input_param = array())
    {
        $this
            ->setId($id)
            ->setInput_param($input_param);
    }
    /**
     * Get id value
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Signicat\DocumentServiceV3_API\StructType\Form
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get input_param value
     * @return input_param
     */
    public function getInput_param()
    {
        return $this->{'input-param'};
    }
    /**
     * Set input_param value
     * @param input_param $input_param
     * @return \Signicat\DocumentServiceV3_API\StructType\Form
     */
    public function setInput_param(array $input_param = array())
    {
        foreach ($input_param as $formInput_paramItem) {
            // validation for constraint: itemType
            if (!$formInput_paramItem instanceof \Signicat\DocumentServiceV3_API\StructType\Form_param) {
                throw new \InvalidArgumentException(sprintf('The input_param property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Form_param, "%s" given', is_object($formInput_paramItem) ? get_class($formInput_paramItem) : gettype($formInput_paramItem)), __LINE__);
            }
        }
        $this->input_param = $this->{'input-param'} = $input_param;
        return $this;
    }
    /**
     */
    public function addToInput_param(\Signicat\DocumentServiceV3_API\StructType\Form_param $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Form_param) {
            throw new \InvalidArgumentException(sprintf('The input_param property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Form_param, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->input_param[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Form
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
