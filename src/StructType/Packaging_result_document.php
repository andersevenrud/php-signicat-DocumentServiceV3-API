<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for packaging-result-document StructType
 * @subpackage Structs
 */
class Packaging_result_document extends Document
{
    /**
     * The ref_packaging_task_id
     */
    public $ref_packaging_task_id;
    /**
     * Constructor method for packaging-result-document
     * @uses Packaging_result_document::setRef_packaging_task_id()
     * @param string $ref_packaging_task_id
     */
    public function __construct($ref_packaging_task_id = null)
    {
        $this
            ->setRef_packaging_task_id($ref_packaging_task_id);
    }
    /**
     * Get ref_packaging_task_id value
     * @return ref_packaging_task_id
     */
    public function getRef_packaging_task_id()
    {
        return $this->{'ref-packaging-task-id'};
    }
    /**
     * Set ref_packaging_task_id value
     * @param ref_packaging_task_id $ref_packaging_task_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Packaging_result_document
     */
    public function setRef_packaging_task_id($ref_packaging_task_id = null)
    {
        // validation for constraint: string
        if (!is_null($ref_packaging_task_id) && !is_string($ref_packaging_task_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ref_packaging_task_id)), __LINE__);
        }
        $this->ref_packaging_task_id = $this->{'ref-packaging-task-id'} = $ref_packaging_task_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Packaging_result_document
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
