<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sds-document StructType
 * @subpackage Structs
 */
class Sds_document extends Document
{
    /**
     * The ref_sds_id
     */
    public $ref_sds_id;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The send_to_archive
     */
    public $send_to_archive;
    /**
     * Constructor method for sds-document
     * @uses Sds_document::setRef_sds_id()
     * @uses Sds_document::setDescription()
     * @uses Sds_document::setSend_to_archive()
     * @param string $ref_sds_id
     * @param string $description
     * @param bool $send_to_archive
     */
    public function __construct($ref_sds_id = null, $description = null, $send_to_archive = null)
    {
        $this
            ->setRef_sds_id($ref_sds_id)
            ->setDescription($description)
            ->setSend_to_archive($send_to_archive);
    }
    /**
     * Get ref_sds_id value
     * @return ref_sds_id
     */
    public function getRef_sds_id()
    {
        return $this->{'ref-sds-id'};
    }
    /**
     * Set ref_sds_id value
     * @param ref_sds_id $ref_sds_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Sds_document
     */
    public function setRef_sds_id($ref_sds_id = null)
    {
        // validation for constraint: string
        if (!is_null($ref_sds_id) && !is_string($ref_sds_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ref_sds_id)), __LINE__);
        }
        $this->ref_sds_id = $this->{'ref-sds-id'} = $ref_sds_id;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Signicat\DocumentServiceV3_API\StructType\Sds_document
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get send_to_archive value
     * @return send_to_archive
     */
    public function getSend_to_archive()
    {
        return $this->{'send-to-archive'};
    }
    /**
     * Set send_to_archive value
     * @param send_to_archive $send_to_archive
     * @return \Signicat\DocumentServiceV3_API\StructType\Sds_document
     */
    public function setSend_to_archive($send_to_archive = null)
    {
        $this->send_to_archive = $this->{'send-to-archive'} = $send_to_archive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Sds_document
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
