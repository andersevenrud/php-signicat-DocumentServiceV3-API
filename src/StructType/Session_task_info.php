<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for session-task-info StructType
 * @subpackage Structs
 */
class Session_task_info extends AbstractStructBase
{
    /**
     * The request_id
     */
    public $request_id;
    /**
     * The task_id
     */
    public $task_id;
    /**
     * The order
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $order;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * Constructor method for session-task-info
     * @uses Session_task_info::setRequest_id()
     * @uses Session_task_info::setTask_id()
     * @uses Session_task_info::setOrder()
     * @uses Session_task_info::setDescription()
     * @param string $request_id
     * @param string $task_id
     * @param int $order
     * @param string $description
     */
    public function __construct($request_id = null, $task_id = null, $order = null, $description = null)
    {
        $this
            ->setRequest_id($request_id)
            ->setTask_id($task_id)
            ->setOrder($order)
            ->setDescription($description);
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Session_task_info
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Session_task_info
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
     * Get order value
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param int $order
     * @return \Signicat\DocumentServiceV3_API\StructType\Session_task_info
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !is_numeric($order)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($order)), __LINE__);
        }
        $this->order = $order;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Signicat\DocumentServiceV3_API\StructType\Session_task_info
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Session_task_info
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
