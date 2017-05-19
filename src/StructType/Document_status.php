<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for document-status StructType
 * @subpackage Structs
 */
class Document_status extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $id;
    /**
     * The original_uri
     */
    public $original_uri;
    /**
     * The result_uri
     */
    public $result_uri;
    /**
     * The form_output_param
     */
    public $form_output_param;
    /**
     * Constructor method for document-status
     * @uses Document_status::setId()
     * @uses Document_status::setOriginal_uri()
     * @uses Document_status::setResult_uri()
     * @uses Document_status::setForm_output_param()
     * @param string $id
     * @param string $original_uri
     * @param string $result_uri
     * @param \Signicat\DocumentServiceV3_API\StructType\Form_param[] $form_output_param
     */
    public function __construct($id = null, $original_uri = null, $result_uri = null, array $form_output_param = array())
    {
        $this
            ->setId($id)
            ->setOriginal_uri($original_uri)
            ->setResult_uri($result_uri)
            ->setForm_output_param($form_output_param);
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_status
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
     * Get original_uri value
     * @return original_uri
     */
    public function getOriginal_uri()
    {
        return $this->{'original-uri'};
    }
    /**
     * Set original_uri value
     * @param original_uri $original_uri
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_status
     */
    public function setOriginal_uri($original_uri = null)
    {
        // validation for constraint: string
        if (!is_null($original_uri) && !is_string($original_uri)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($original_uri)), __LINE__);
        }
        $this->original_uri = $this->{'original-uri'} = $original_uri;
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_status
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
     * Get form_output_param value
     * @return form_output_param
     */
    public function getForm_output_param()
    {
        return $this->{'form-output-param'};
    }
    /**
     * Set form_output_param value
     * @param form_output_param $form_output_param
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_status
     */
    public function setForm_output_param(array $form_output_param = array())
    {
        foreach ($form_output_param as $document_statusForm_output_paramItem) {
            // validation for constraint: itemType
            if (!$document_statusForm_output_paramItem instanceof \Signicat\DocumentServiceV3_API\StructType\Form_param) {
                throw new \InvalidArgumentException(sprintf('The form_output_param property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Form_param, "%s" given', is_object($document_statusForm_output_paramItem) ? get_class($document_statusForm_output_paramItem) : gettype($document_statusForm_output_paramItem)), __LINE__);
            }
        }
        $this->form_output_param = $this->{'form-output-param'} = $form_output_param;
        return $this;
    }
    /**
     */
    public function addToForm_output_param(\Signicat\DocumentServiceV3_API\StructType\Form_param $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Form_param) {
            throw new \InvalidArgumentException(sprintf('The form_output_param property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Form_param, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->form_output_param[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_status
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
