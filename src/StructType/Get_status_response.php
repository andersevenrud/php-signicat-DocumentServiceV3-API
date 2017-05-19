<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for get-status-response StructType
 * @subpackage Structs
 */
class Get_status_response extends AbstractStructBase
{
    /**
     * The task_status_info
     */
    public $task_status_info;
    /**
     * Constructor method for get-status-response
     * @uses Get_status_response::setTask_status_info()
     * @param \Signicat\DocumentServiceV3_API\StructType\Task_status_info[] $task_status_info
     */
    public function __construct(array $task_status_info = array())
    {
        $this
            ->setTask_status_info($task_status_info);
    }
    /**
     * Get task_status_info value
     * @return task_status_info
     */
    public function getTask_status_info()
    {
        return $this->{'task-status-info'};
    }
    /**
     * Set task_status_info value
     * @param task_status_info $task_status_info
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_status_response
     */
    public function setTask_status_info(array $task_status_info = array())
    {
        foreach ($task_status_info as $get_status_responseTask_status_infoItem) {
            // validation for constraint: itemType
            if (!$get_status_responseTask_status_infoItem instanceof \Signicat\DocumentServiceV3_API\StructType\Task_status_info) {
                throw new \InvalidArgumentException(sprintf('The task_status_info property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Task_status_info, "%s" given', is_object($get_status_responseTask_status_infoItem) ? get_class($get_status_responseTask_status_infoItem) : gettype($get_status_responseTask_status_infoItem)), __LINE__);
            }
        }
        $this->task_status_info = $this->{'task-status-info'} = $task_status_info;
        return $this;
    }
    /**
     */
    public function addToTask_status_info(\Signicat\DocumentServiceV3_API\StructType\Task_status_info $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Task_status_info) {
            throw new \InvalidArgumentException(sprintf('The task_status_info property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Task_status_info, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->task_status_info[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_status_response
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
