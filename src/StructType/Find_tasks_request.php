<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for find-tasks-request StructType
 * @subpackage Structs
 */
class Find_tasks_request extends AbstractStructBase
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
     * The from_index
     */
    public $from_index;
    /**
     * The to_index
     */
    public $to_index;
    /**
     * The sort_field
     */
    public $sort_field;
    /**
     * The ascending
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ascending;
    /**
     * Constructor method for find-tasks-request
     * @uses Find_tasks_request::setService()
     * @uses Find_tasks_request::setPassword()
     * @uses Find_tasks_request::setFilter()
     * @uses Find_tasks_request::setFrom_index()
     * @uses Find_tasks_request::setTo_index()
     * @uses Find_tasks_request::setSort_field()
     * @uses Find_tasks_request::setAscending()
     * @param string $service
     * @param string $password
     * @param \Signicat\DocumentServiceV3_API\StructType\Task_filter $filter
     * @param int $from_index
     * @param int $to_index
     * @param string $sort_field
     * @param bool $ascending
     */
    public function __construct($service = null, $password = null, \Signicat\DocumentServiceV3_API\StructType\Task_filter $filter = null, $from_index = 0, $to_index = 100, $sort_field = null, $ascending = null)
    {
        $this
            ->setService($service)
            ->setPassword($password)
            ->setFilter($filter)
            ->setFrom_index($from_index)
            ->setTo_index($to_index)
            ->setSort_field($sort_field)
            ->setAscending($ascending);
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Find_tasks_request
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Find_tasks_request
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Find_tasks_request
     */
    public function setFilter(\Signicat\DocumentServiceV3_API\StructType\Task_filter $filter = null)
    {
        $this->filter = $filter;
        return $this;
    }
    /**
     * Get from_index value
     * @return from_index
     */
    public function getFrom_index()
    {
        return $this->{'from-index'};
    }
    /**
     * Set from_index value
     * @param from_index $from_index
     * @return \Signicat\DocumentServiceV3_API\StructType\Find_tasks_request
     */
    public function setFrom_index($from_index = 0)
    {
        // validation for constraint: int
        if (!is_null($from_index) && !is_numeric($from_index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($from_index)), __LINE__);
        }
        $this->from_index = $this->{'from-index'} = $from_index;
        return $this;
    }
    /**
     * Get to_index value
     * @return to_index
     */
    public function getTo_index()
    {
        return $this->{'to-index'};
    }
    /**
     * Set to_index value
     * @param to_index $to_index
     * @return \Signicat\DocumentServiceV3_API\StructType\Find_tasks_request
     */
    public function setTo_index($to_index = 100)
    {
        // validation for constraint: int
        if (!is_null($to_index) && !is_numeric($to_index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($to_index)), __LINE__);
        }
        $this->to_index = $this->{'to-index'} = $to_index;
        return $this;
    }
    /**
     * Get sort_field value
     * @return sort_field
     */
    public function getSort_field()
    {
        return $this->{'sort-field'};
    }
    /**
     * Set sort_field value
     * @param sort_field $sort_field
     * @return \Signicat\DocumentServiceV3_API\StructType\Find_tasks_request
     */
    public function setSort_field($sort_field = null)
    {
        // validation for constraint: enumeration
        if (!\Signicat\DocumentServiceV3_API\EnumType\Task_filter_field::valueIsValid($sort_field)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sort_field, implode(', ', \Signicat\DocumentServiceV3_API\EnumType\Task_filter_field::getValidValues())), __LINE__);
        }
        $this->sort_field = $this->{'sort-field'} = $sort_field;
        return $this;
    }
    /**
     * Get ascending value
     * @return bool|null
     */
    public function getAscending()
    {
        return $this->ascending;
    }
    /**
     * Set ascending value
     * @param bool $ascending
     * @return \Signicat\DocumentServiceV3_API\StructType\Find_tasks_request
     */
    public function setAscending($ascending = null)
    {
        $this->ascending = $ascending;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Find_tasks_request
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
