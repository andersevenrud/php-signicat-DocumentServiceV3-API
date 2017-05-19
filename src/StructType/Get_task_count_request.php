<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for get-task-count-request StructType
 * @subpackage Structs
 */
class Get_task_count_request extends AbstractStructBase
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
     * The filter
     * @var \Signicat\DocumentServiceV3_API\StructType\Task_filter
     */
    public $filter;
    /**
     * Constructor method for get-task-count-request
     * @uses Get_task_count_request::setService()
     * @uses Get_task_count_request::setPassword()
     * @uses Get_task_count_request::setFilter()
     * @param string $service
     * @param string $password
     * @param \Signicat\DocumentServiceV3_API\StructType\Task_filter $filter
     */
    public function __construct($service = null, $password = null, \Signicat\DocumentServiceV3_API\StructType\Task_filter $filter = null)
    {
        $this
            ->setService($service)
            ->setPassword($password)
            ->setFilter($filter);
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_task_count_request
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_task_count_request
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
     * Get filter value
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_filter|null
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * Set filter value
     * @param \Signicat\DocumentServiceV3_API\StructType\Task_filter $filter
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_task_count_request
     */
    public function setFilter(\Signicat\DocumentServiceV3_API\StructType\Task_filter $filter = null)
    {
        $this->filter = $filter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_task_count_request
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
