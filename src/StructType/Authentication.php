<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for authentication StructType
 * @subpackage Structs
 */
class Authentication extends AbstractStructBase
{
    /**
     * The dialog
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Signicat\DocumentServiceV3_API\StructType\Dialog
     */
    public $dialog;
    /**
     * The method
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $method;
    /**
     * The artifact
     * @var bool
     */
    public $artifact;
    /**
     * Constructor method for authentication
     * @uses Authentication::setDialog()
     * @uses Authentication::setMethod()
     * @uses Authentication::setArtifact()
     * @param \Signicat\DocumentServiceV3_API\StructType\Dialog $dialog
     * @param string[] $method
     * @param bool $artifact
     */
    public function __construct(\Signicat\DocumentServiceV3_API\StructType\Dialog $dialog = null, array $method = array(), $artifact = null)
    {
        $this
            ->setDialog($dialog)
            ->setMethod($method)
            ->setArtifact($artifact);
    }
    /**
     * Get dialog value
     * @return \Signicat\DocumentServiceV3_API\StructType\Dialog|null
     */
    public function getDialog()
    {
        return $this->dialog;
    }
    /**
     * Set dialog value
     * @param \Signicat\DocumentServiceV3_API\StructType\Dialog $dialog
     * @return \Signicat\DocumentServiceV3_API\StructType\Authentication
     */
    public function setDialog(\Signicat\DocumentServiceV3_API\StructType\Dialog $dialog = null)
    {
        $this->dialog = $dialog;
        return $this;
    }
    /**
     * Get method value
     * @return string[]|null
     */
    public function getMethod()
    {
        return $this->method;
    }
    /**
     * Set method value
     * @throws \InvalidArgumentException
     * @param string[] $method
     * @return \Signicat\DocumentServiceV3_API\StructType\Authentication
     */
    public function setMethod(array $method = array())
    {
        foreach ($method as $authenticationMethodItem) {
            // validation for constraint: itemType
            if (!is_string($authenticationMethodItem)) {
                throw new \InvalidArgumentException(sprintf('The method property can only contain items of string, "%s" given', is_object($authenticationMethodItem) ? get_class($authenticationMethodItem) : gettype($authenticationMethodItem)), __LINE__);
            }
        }
        $this->method = $method;
        return $this;
    }
    /**
     * Add item to method value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Signicat\DocumentServiceV3_API\StructType\Authentication
     */
    public function addToMethod($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The method property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->method[] = $item;
        return $this;
    }
    /**
     * Get artifact value
     * @return bool|null
     */
    public function getArtifact()
    {
        return $this->artifact;
    }
    /**
     * Set artifact value
     * @param bool $artifact
     * @return \Signicat\DocumentServiceV3_API\StructType\Authentication
     */
    public function setArtifact($artifact = null)
    {
        $this->artifact = $artifact;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Authentication
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
