<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for archive-document StructType
 * @subpackage Structs
 */
class Archive_document extends Document
{
    /**
     * The ref_archive_id
     */
    public $ref_archive_id;
    /**
     * Constructor method for archive-document
     * @uses Archive_document::setRef_archive_id()
     * @param string $ref_archive_id
     */
    public function __construct($ref_archive_id = null)
    {
        $this
            ->setRef_archive_id($ref_archive_id);
    }
    /**
     * Get ref_archive_id value
     * @return ref_archive_id
     */
    public function getRef_archive_id()
    {
        return $this->{'ref-archive-id'};
    }
    /**
     * Set ref_archive_id value
     * @param ref_archive_id $ref_archive_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Archive_document
     */
    public function setRef_archive_id($ref_archive_id = null)
    {
        // validation for constraint: string
        if (!is_null($ref_archive_id) && !is_string($ref_archive_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ref_archive_id)), __LINE__);
        }
        $this->ref_archive_id = $this->{'ref-archive-id'} = $ref_archive_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Archive_document
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
