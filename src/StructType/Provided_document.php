<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for provided-document StructType
 * @subpackage Structs
 */
class Provided_document extends Document
{
    /**
     * The mime_type
     */
    public $mime_type;
    /**
     * The data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $data;
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
     * Constructor method for provided-document
     * @uses Provided_document::setMime_type()
     * @uses Provided_document::setData()
     * @uses Provided_document::setDescription()
     * @uses Provided_document::setSend_to_archive()
     * @param string $mime_type
     * @param string $data
     * @param string $description
     * @param bool $send_to_archive
     */
    public function __construct($mime_type = null, $data = null, $description = null, $send_to_archive = null)
    {
        $this
            ->setMime_type($mime_type)
            ->setData($data)
            ->setDescription($description)
            ->setSend_to_archive($send_to_archive);
    }
    /**
     * Get mime_type value
     * @return mime_type
     */
    public function getMime_type()
    {
        return $this->{'mime-type'};
    }
    /**
     * Set mime_type value
     * @param mime_type $mime_type
     * @return \Signicat\DocumentServiceV3_API\StructType\Provided_document
     */
    public function setMime_type($mime_type = null)
    {
        // validation for constraint: string
        if (!is_null($mime_type) && !is_string($mime_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mime_type)), __LINE__);
        }
        $this->mime_type = $this->{'mime-type'} = $mime_type;
        return $this;
    }
    /**
     * Get data value
     * @return string|null
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \Signicat\DocumentServiceV3_API\StructType\Provided_document
     */
    public function setData($data = null)
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($data)), __LINE__);
        }
        $this->data = $data;
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Provided_document
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Provided_document
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Provided_document
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
