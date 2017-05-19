<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for task-filter StructType
 * @subpackage Structs
 */
class Task_filter extends AbstractStructBase
{
    /**
     * The criteria
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Signicat\DocumentServiceV3_API\StructType\Task_filter_criteria[]
     */
    public $criteria;
    /**
     * The from_date
     */
    public $from_date;
    /**
     * The to_date
     */
    public $to_date;
    /**
     * Constructor method for task-filter
     * @uses Task_filter::setCriteria()
     * @uses Task_filter::setFrom_date()
     * @uses Task_filter::setTo_date()
     * @param \Signicat\DocumentServiceV3_API\StructType\Task_filter_criteria[] $criteria
     * @param string $from_date
     * @param string $to_date
     */
    public function __construct(array $criteria = array(), $from_date = null, $to_date = null)
    {
        $this
            ->setCriteria($criteria)
            ->setFrom_date($from_date)
            ->setTo_date($to_date);
    }
    /**
     * Get criteria value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_filter_criteria[]|null
     */
    public function getCriteria()
    {
        return isset($this->criteria) ? $this->criteria : null;
    }
    /**
     * Set criteria value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Task_filter_criteria[] $criteria
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_filter
     */
    public function setCriteria(array $criteria = array())
    {
        foreach ($criteria as $task_filterCriteriaItem) {
            // validation for constraint: itemType
            if (!$task_filterCriteriaItem instanceof \Signicat\DocumentServiceV3_API\StructType\Task_filter_criteria) {
                throw new \InvalidArgumentException(sprintf('The criteria property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Task_filter_criteria, "%s" given', is_object($task_filterCriteriaItem) ? get_class($task_filterCriteriaItem) : gettype($task_filterCriteriaItem)), __LINE__);
            }
        }
        if (is_null($criteria) || (is_array($criteria) && empty($criteria))) {
            unset($this->criteria);
        } else {
            $this->criteria = $criteria;
        }
        return $this;
    }
    /**
     * Add item to criteria value
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Task_filter_criteria $item
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_filter
     */
    public function addToCriteria(\Signicat\DocumentServiceV3_API\StructType\Task_filter_criteria $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Task_filter_criteria) {
            throw new \InvalidArgumentException(sprintf('The criteria property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Task_filter_criteria, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->criteria[] = $item;
        return $this;
    }
    /**
     * Get from_date value
     * @return from_date
     */
    public function getFrom_date()
    {
        return $this->{'from-date'};
    }
    /**
     * Set from_date value
     * @param from_date $from_date
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_filter
     */
    public function setFrom_date($from_date = null)
    {
        // validation for constraint: string
        if (!is_null($from_date) && !is_string($from_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($from_date)), __LINE__);
        }
        $this->from_date = $this->{'from-date'} = $from_date;
        return $this;
    }
    /**
     * Get to_date value
     * @return to_date
     */
    public function getTo_date()
    {
        return $this->{'to-date'};
    }
    /**
     * Set to_date value
     * @param to_date $to_date
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_filter
     */
    public function setTo_date($to_date = null)
    {
        // validation for constraint: string
        if (!is_null($to_date) && !is_string($to_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($to_date)), __LINE__);
        }
        $this->to_date = $this->{'to-date'} = $to_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_filter
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
