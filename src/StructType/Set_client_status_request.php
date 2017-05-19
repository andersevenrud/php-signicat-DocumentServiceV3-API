<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for set-client-status-request StructType
 * @subpackage Structs
 */
class Set_client_status_request extends AbstractStructBase
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
     * The task_id
     */
    public $task_id;
    /**
     * The client_status
     */
    public $client_status;
    /**
     * Constructor method for set-client-status-request
     * @uses Set_client_status_request::setService()
     * @uses Set_client_status_request::setPassword()
     * @uses Set_client_status_request::setRequest_id()
     * @uses Set_client_status_request::setTask_id()
     * @uses Set_client_status_request::setClient_status()
     * @param string $service
     * @param string $password
     * @param string $request_id
     * @param string $task_id
     * @param string $client_status
     */
    public function __construct($service = null, $password = null, $request_id = null, $task_id = null, $client_status = null)
    {
        $this
            ->setService($service)
            ->setPassword($password)
            ->setRequest_id($request_id)
            ->setTask_id($task_id)
            ->setClient_status($client_status);
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Set_client_status_request
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Set_client_status_request
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Set_client_status_request
     */
    public function setRequest_id($request_id = null)
    {
        // validation for constraint: string
        if (!is_null($request_id) && !is_string($request_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($request_id)), __LINE__);
        }
        $this->request_id = $this->{'request-id'} = $request_id;
        return $this;
    }
    /**
     * Get task_id value
     * @return task_id
     */
    public function getTask_id()
    {
        return $this->{'task-id'};
    }
    /**
     * Set task_id value
     * @param task_id $task_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Set_client_status_request
     */
    public function setTask_id($task_id = null)
    {
        // validation for constraint: string
        if (!is_null($task_id) && !is_string($task_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($task_id)), __LINE__);
        }
        $this->task_id = $this->{'task-id'} = $task_id;
        return $this;
    }
    /**
     * Get client_status value
     * @return client_status
     */
    public function getClient_status()
    {
        return $this->{'client-status'};
    }
    /**
     * Set client_status value
     * @param client_status $client_status
     * @return \Signicat\DocumentServiceV3_API\StructType\Set_client_status_request
     */
    public function setClient_status($client_status = null)
    {
        // validation for constraint: string
        if (!is_null($client_status) && !is_string($client_status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($client_status)), __LINE__);
        }
        $this->client_status = $this->{'client-status'} = $client_status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Set_client_status_request
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
