<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for packaging-document-status StructType
 * @subpackage Structs
 */
class Packaging_document_status extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $id;
    /**
     * The result_uri
     */
    public $result_uri;
    /**
     * Constructor method for packaging-document-status
     * @uses Packaging_document_status::setId()
     * @uses Packaging_document_status::setResult_uri()
     * @param string $id
     * @param string $result_uri
     */
    public function __construct($id = null, $result_uri = null)
    {
        $this
            ->setId($id)
            ->setResult_uri($result_uri);
    }
    /**
     * Get id value
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Signicat\DocumentServiceV3_API\StructType\Packaging_document_status
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get result_uri value
     * @return result_uri
     */
    public function getResult_uri()
    {
        return $this->{'result-uri'};
    }
    /**
     * Set result_uri value
     * @param result_uri $result_uri
     * @return \Signicat\DocumentServiceV3_API\StructType\Packaging_document_status
     */
    public function setResult_uri($result_uri = null)
    {
        // validation for constraint: string
        if (!is_null($result_uri) && !is_string($result_uri)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($result_uri)), __LINE__);
        }
        $this->result_uri = $this->{'result-uri'} = $result_uri;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Packaging_document_status
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
