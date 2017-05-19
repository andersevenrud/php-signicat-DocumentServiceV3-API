<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for create-request-request StructType
 * @subpackage Structs
 */
class Create_request_request extends AbstractStructBase
{
    /**
     * The service
     * @var string
     */
    public $service;
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Signicat\DocumentServiceV3_API\StructType\Request[]
     */
    public $request;
    /**
     * Constructor method for create-request-request
     * @uses Create_request_request::setService()
     * @uses Create_request_request::setPassword()
     * @uses Create_request_request::setRequest()
     * @param string $service
     * @param string $password
     * @param \Signicat\DocumentServiceV3_API\StructType\Request[] $request
     */
    public function __construct($service = null, $password = null, array $request = array())
    {
        $this
            ->setService($service)
            ->setPassword($password)
            ->setRequest($request);
    }
    /**
     * Get service value
     * @return string|null
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_request_request
     */
    public function setService($service = null)
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($service)), __LINE__);
        }
        $this->service = $service;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_request_request
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get request value
     * @return \Signicat\DocumentServiceV3_API\StructType\Request[]|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Request[] $request
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_request_request
     */
    public function setRequest(array $request = array())
    {
        foreach ($request as $create_request_requestRequestItem) {
            // validation for constraint: itemType
            if (!$create_request_requestRequestItem instanceof \Signicat\DocumentServiceV3_API\StructType\Request) {
                throw new \InvalidArgumentException(sprintf('The request property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Request, "%s" given', is_object($create_request_requestRequestItem) ? get_class($create_request_requestRequestItem) : gettype($create_request_requestRequestItem)), __LINE__);
            }
        }
        $this->request = $request;
        return $this;
    }
    /**
     * Add item to request value
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Request $item
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_request_request
     */
    public function addToRequest(\Signicat\DocumentServiceV3_API\StructType\Request $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Request) {
            throw new \InvalidArgumentException(sprintf('The request property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Request, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->request[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_request_request
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
