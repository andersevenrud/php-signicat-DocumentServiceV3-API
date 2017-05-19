<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for add-task-request StructType
 * @subpackage Structs
 */
class Add_task_request extends AbstractStructBase
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
     * The task
     * @var \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public $task;
    /**
     * Constructor method for add-task-request
     * @uses Add_task_request::setService()
     * @uses Add_task_request::setPassword()
     * @uses Add_task_request::setRequest_id()
     * @uses Add_task_request::setTask()
     * @param string $service
     * @param string $password
     * @param string $request_id
     * @param \Signicat\DocumentServiceV3_API\StructType\Task $task
     */
    public function __construct($service = null, $password = null, $request_id = null, \Signicat\DocumentServiceV3_API\StructType\Task $task = null)
    {
        $this
            ->setService($service)
            ->setPassword($password)
            ->setRequest_id($request_id)
            ->setTask($task);
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Add_task_request
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Add_task_request
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Add_task_request
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
     * Get task value
     * @return \Signicat\DocumentServiceV3_API\StructType\Task|null
     */
    public function getTask()
    {
        return $this->task;
    }
    /**
     * Set task value
     * @param \Signicat\DocumentServiceV3_API\StructType\Task $task
     * @return \Signicat\DocumentServiceV3_API\StructType\Add_task_request
     */
    public function setTask(\Signicat\DocumentServiceV3_API\StructType\Task $task = null)
    {
        $this->task = $task;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Add_task_request
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
