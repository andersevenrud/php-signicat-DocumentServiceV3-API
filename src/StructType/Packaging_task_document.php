<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for packaging-task-document StructType
 * @subpackage Structs
 */
class Packaging_task_document extends AbstractStructBase
{
    /**
     * The task_id
     */
    public $task_id;
    /**
     * The document_id
     */
    public $document_id;
    /**
     * Constructor method for packaging-task-document
     * @uses Packaging_task_document::setTask_id()
     * @uses Packaging_task_document::setDocument_id()
     * @param string $task_id
     * @param string $document_id
     */
    public function __construct($task_id = null, $document_id = null)
    {
        $this
            ->setTask_id($task_id)
            ->setDocument_id($document_id);
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Packaging_task_document
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
     * Get document_id value
     * @return document_id
     */
    public function getDocument_id()
    {
        return $this->{'document-id'};
    }
    /**
     * Set document_id value
     * @param document_id $document_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Packaging_task_document
     */
    public function setDocument_id($document_id = null)
    {
        // validation for constraint: string
        if (!is_null($document_id) && !is_string($document_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document_id)), __LINE__);
        }
        $this->document_id = $this->{'document-id'} = $document_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Packaging_task_document
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
