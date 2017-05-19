<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for authentication-based-signature StructType
 * @subpackage Structs
 */
class Authentication_based_signature extends AbstractStructBase
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
     * @var \Signicat\DocumentServiceV3_API\StructType\Method[]
     */
    public $method;
    /**
     * The if_authentication
     */
    public $if_authentication;
    /**
     * Constructor method for authentication-based-signature
     * @uses Authentication_based_signature::setDialog()
     * @uses Authentication_based_signature::setMethod()
     * @uses Authentication_based_signature::setIf_authentication()
     * @param \Signicat\DocumentServiceV3_API\StructType\Dialog $dialog
     * @param \Signicat\DocumentServiceV3_API\StructType\Method[] $method
     * @param string $if_authentication
     */
    public function __construct(\Signicat\DocumentServiceV3_API\StructType\Dialog $dialog = null, array $method = array(), $if_authentication = null)
    {
        $this
            ->setDialog($dialog)
            ->setMethod($method)
            ->setIf_authentication($if_authentication);
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Authentication_based_signature
     */
    public function setDialog(\Signicat\DocumentServiceV3_API\StructType\Dialog $dialog = null)
    {
        $this->dialog = $dialog;
        return $this;
    }
    /**
     * Get method value
     * @return \Signicat\DocumentServiceV3_API\StructType\Method[]|null
     */
    public function getMethod()
    {
        return $this->method;
    }
    /**
     * Set method value
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Method[] $method
     * @return \Signicat\DocumentServiceV3_API\StructType\Authentication_based_signature
     */
    public function setMethod(array $method = array())
    {
        foreach ($method as $authentication_based_signatureMethodItem) {
            // validation for constraint: itemType
            if (!$authentication_based_signatureMethodItem instanceof \Signicat\DocumentServiceV3_API\StructType\Method) {
                throw new \InvalidArgumentException(sprintf('The method property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Method, "%s" given', is_object($authentication_based_signatureMethodItem) ? get_class($authentication_based_signatureMethodItem) : gettype($authentication_based_signatureMethodItem)), __LINE__);
            }
        }
        $this->method = $method;
        return $this;
    }
    /**
     * Add item to method value
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Method $item
     * @return \Signicat\DocumentServiceV3_API\StructType\Authentication_based_signature
     */
    public function addToMethod(\Signicat\DocumentServiceV3_API\StructType\Method $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Method) {
            throw new \InvalidArgumentException(sprintf('The method property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Method, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->method[] = $item;
        return $this;
    }
    /**
     * Get if_authentication value
     * @return if_authentication
     */
    public function getIf_authentication()
    {
        return $this->{'if-authentication'};
    }
    /**
     * Set if_authentication value
     * @param if_authentication $if_authentication
     * @return \Signicat\DocumentServiceV3_API\StructType\Authentication_based_signature
     */
    public function setIf_authentication($if_authentication = null)
    {
        // validation for constraint: string
        if (!is_null($if_authentication) && !is_string($if_authentication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($if_authentication)), __LINE__);
        }
        $this->if_authentication = $this->{'if-authentication'} = $if_authentication;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Authentication_based_signature
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
