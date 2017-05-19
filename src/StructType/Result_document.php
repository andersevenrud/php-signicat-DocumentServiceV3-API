<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for result-document StructType
 * @subpackage Structs
 */
class Result_document extends Document
{
    /**
     * The ref_task_id
     */
    public $ref_task_id;
    /**
     * The ref_document_id
     */
    public $ref_document_id;
    /**
     * Constructor method for result-document
     * @uses Result_document::setRef_task_id()
     * @uses Result_document::setRef_document_id()
     * @param string $ref_task_id
     * @param string $ref_document_id
     */
    public function __construct($ref_task_id = null, $ref_document_id = null)
    {
        $this
            ->setRef_task_id($ref_task_id)
            ->setRef_document_id($ref_document_id);
    }
    /**
     * Get ref_task_id value
     * @return ref_task_id
     */
    public function getRef_task_id()
    {
        return $this->{'ref-task-id'};
    }
    /**
     * Set ref_task_id value
     * @param ref_task_id $ref_task_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Result_document
     */
    public function setRef_task_id($ref_task_id = null)
    {
        // validation for constraint: string
        if (!is_null($ref_task_id) && !is_string($ref_task_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ref_task_id)), __LINE__);
        }
        $this->ref_task_id = $this->{'ref-task-id'} = $ref_task_id;
        return $this;
    }
    /**
     * Get ref_document_id value
     * @return ref_document_id
     */
    public function getRef_document_id()
    {
        return $this->{'ref-document-id'};
    }
    /**
     * Set ref_document_id value
     * @param ref_document_id $ref_document_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Result_document
     */
    public function setRef_document_id($ref_document_id = null)
    {
        // validation for constraint: string
        if (!is_null($ref_document_id) && !is_string($ref_document_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ref_document_id)), __LINE__);
        }
        $this->ref_document_id = $this->{'ref-document-id'} = $ref_document_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Result_document
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
