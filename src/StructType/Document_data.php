<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for document-data StructType
 * @subpackage Structs
 */
class Document_data extends AbstractStructBase
{
    /**
     * The mime_type
     */
    public $mime_type;
    /**
     * The data
     * @var string
     */
    public $data;
    /**
     * The archive_id
     */
    public $archive_id;
    /**
     * Constructor method for document-data
     * @uses Document_data::setMime_type()
     * @uses Document_data::setData()
     * @uses Document_data::setArchive_id()
     * @param string $mime_type
     * @param string $data
     * @param string $archive_id
     */
    public function __construct($mime_type = null, $data = null, $archive_id = null)
    {
        $this
            ->setMime_type($mime_type)
            ->setData($data)
            ->setArchive_id($archive_id);
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_data
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_data
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
     * Get archive_id value
     * @return archive_id
     */
    public function getArchive_id()
    {
        return $this->{'archive-id'};
    }
    /**
     * Set archive_id value
     * @param archive_id $archive_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_data
     */
    public function setArchive_id($archive_id = null)
    {
        // validation for constraint: string
        if (!is_null($archive_id) && !is_string($archive_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($archive_id)), __LINE__);
        }
        $this->archive_id = $this->{'archive-id'} = $archive_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_data
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
