<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for find-tasks-response StructType
 * @subpackage Structs
 */
class Find_tasks_response extends AbstractStructBase
{
    /**
     * The task
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Signicat\DocumentServiceV3_API\StructType\Task_info[]
     */
    public $task;
    /**
     * Constructor method for find-tasks-response
     * @uses Find_tasks_response::setTask()
     * @param \Signicat\DocumentServiceV3_API\StructType\Task_info[] $task
     */
    public function __construct(array $task = array())
    {
        $this
            ->setTask($task);
    }
    /**
     * Get task value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info[]|null
     */
    public function getTask()
    {
        return isset($this->task) ? $this->task : null;
    }
    /**
     * Set task value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Task_info[] $task
     * @return \Signicat\DocumentServiceV3_API\StructType\Find_tasks_response
     */
    public function setTask(array $task = array())
    {
        foreach ($task as $find_tasks_responseTaskItem) {
            // validation for constraint: itemType
            if (!$find_tasks_responseTaskItem instanceof \Signicat\DocumentServiceV3_API\StructType\Task_info) {
                throw new \InvalidArgumentException(sprintf('The task property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Task_info, "%s" given', is_object($find_tasks_responseTaskItem) ? get_class($find_tasks_responseTaskItem) : gettype($find_tasks_responseTaskItem)), __LINE__);
            }
        }
        if (is_null($task) || (is_array($task) && empty($task))) {
            unset($this->task);
        } else {
            $this->task = $task;
        }
        return $this;
    }
    /**
     * Add item to task value
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Task_info $item
     * @return \Signicat\DocumentServiceV3_API\StructType\Find_tasks_response
     */
    public function addToTask(\Signicat\DocumentServiceV3_API\StructType\Task_info $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Task_info) {
            throw new \InvalidArgumentException(sprintf('The task property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Task_info, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->task[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Find_tasks_response
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
