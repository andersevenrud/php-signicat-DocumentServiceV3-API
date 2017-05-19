<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for get-task-response StructType
 * @subpackage Structs
 */
class Get_task_response extends AbstractStructBase
{
    /**
     * The task
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public $task;
    /**
     * Constructor method for get-task-response
     * @uses Get_task_response::setTask()
     * @param \Signicat\DocumentServiceV3_API\StructType\Task $task
     */
    public function __construct(\Signicat\DocumentServiceV3_API\StructType\Task $task = null)
    {
        $this
            ->setTask($task);
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_task_response
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_task_response
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
