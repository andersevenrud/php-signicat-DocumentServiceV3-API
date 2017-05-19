<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for get-status-request StructType
 * @subpackage Structs
 */
class Get_status_request extends AbstractStructBase
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
     * The request_id
     */
    public $request_id;
    /**
     * Constructor method for get-status-request
     * @uses Get_status_request::setService()
     * @uses Get_status_request::setPassword()
     * @uses Get_status_request::setRequest_id()
     * @param string $service
     * @param string $password
     * @param string[] $request_id
     */
    public function __construct($service = null, $password = null, array $request_id = array())
    {
        $this
            ->setService($service)
            ->setPassword($password)
            ->setRequest_id($request_id);
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_status_request
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_status_request
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
     * Get request_id value
     * @return request_id
     */
    public function getRequest_id()
    {
        return $this->{'request-id'};
    }
    /**
     * Set request_id value
     * @param request_id $request_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_status_request
     */
    public function setRequest_id(array $request_id = array())
    {
        foreach ($request_id as $get_status_requestRequest_idItem) {
            // validation for constraint: itemType
            if (!is_string($get_status_requestRequest_idItem)) {
                throw new \InvalidArgumentException(sprintf('The request_id property can only contain items of string, "%s" given', is_object($get_status_requestRequest_idItem) ? get_class($get_status_requestRequest_idItem) : gettype($get_status_requestRequest_idItem)), __LINE__);
            }
        }
        $this->request_id = $this->{'request-id'} = $request_id;
        return $this;
    }
    /**
     */
    public function addToRequest_id($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The request_id property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->request_id[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_status_request
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
