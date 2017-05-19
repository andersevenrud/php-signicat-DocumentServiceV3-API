<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for document-action StructType
 * @subpackage Structs
 */
class Document_action extends AbstractStructBase
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $type;
    /**
     * The dialog
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Signicat\DocumentServiceV3_API\StructType\Dialog
     */
    public $dialog;
    /**
     * The document_ref
     */
    public $document_ref;
    /**
     * The document
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Signicat\DocumentServiceV3_API\StructType\Document
     */
    public $document;
    /**
     * The order_index
     */
    public $order_index;
    /**
     * The optional
     * @var bool
     */
    public $optional;
    /**
     * The send_result_to_archive
     */
    public $send_result_to_archive;
    /**
     * Constructor method for document-action
     * @uses Document_action::setType()
     * @uses Document_action::setDialog()
     * @uses Document_action::setDocument_ref()
     * @uses Document_action::setDocument()
     * @uses Document_action::setOrder_index()
     * @uses Document_action::setOptional()
     * @uses Document_action::setSend_result_to_archive()
     * @param string $type
     * @param \Signicat\DocumentServiceV3_API\StructType\Dialog $dialog
     * @param string $document_ref
     * @param \Signicat\DocumentServiceV3_API\StructType\Document $document
     * @param int $order_index
     * @param bool $optional
     * @param bool $send_result_to_archive
     */
    public function __construct($type = null, \Signicat\DocumentServiceV3_API\StructType\Dialog $dialog = null, $document_ref = null, \Signicat\DocumentServiceV3_API\StructType\Document $document = null, $order_index = null, $optional = null, $send_result_to_archive = null)
    {
        $this
            ->setType($type)
            ->setDialog($dialog)
            ->setDocument_ref($document_ref)
            ->setDocument($document)
            ->setOrder_index($order_index)
            ->setOptional($optional)
            ->setSend_result_to_archive($send_result_to_archive);
    }
    /**
     * Get type value
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Signicat\DocumentServiceV3_API\EnumType\Document_action_type::valueIsValid()
     * @uses \Signicat\DocumentServiceV3_API\EnumType\Document_action_type::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_action
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Signicat\DocumentServiceV3_API\EnumType\Document_action_type::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Signicat\DocumentServiceV3_API\EnumType\Document_action_type::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get dialog value
     * @return \Signicat\DocumentServiceV3_API\StructType\Dialog|null
     */
    public function getDialog()
    {
        return $this->dialog;
    }
    /**
     * Set dialog value
     * @param \Signicat\DocumentServiceV3_API\StructType\Dialog $dialog
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_action
     */
    public function setDialog(\Signicat\DocumentServiceV3_API\StructType\Dialog $dialog = null)
    {
        $this->dialog = $dialog;
        return $this;
    }
    /**
     * Get document_ref value
     * @return document_ref
     */
    public function getDocument_ref()
    {
        return $this->{'document-ref'};
    }
    /**
     * Set document_ref value
     * @param document_ref $document_ref
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_action
     */
    public function setDocument_ref($document_ref = null)
    {
        // validation for constraint: string
        if (!is_null($document_ref) && !is_string($document_ref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document_ref)), __LINE__);
        }
        $this->document_ref = $this->{'document-ref'} = $document_ref;
        return $this;
    }
    /**
     * Get document value
     * @return \Signicat\DocumentServiceV3_API\StructType\Document|null
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * Set document value
     * @param \Signicat\DocumentServiceV3_API\StructType\Document $document
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_action
     */
    public function setDocument(\Signicat\DocumentServiceV3_API\StructType\Document $document = null)
    {
        $this->document = $document;
        return $this;
    }
    /**
     * Get order_index value
     * @return order_index
     */
    public function getOrder_index()
    {
        return $this->{'order-index'};
    }
    /**
     * Set order_index value
     * @param order_index $order_index
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_action
     */
    public function setOrder_index($order_index = null)
    {
        // validation for constraint: int
        if (!is_null($order_index) && !is_numeric($order_index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($order_index)), __LINE__);
        }
        $this->order_index = $this->{'order-index'} = $order_index;
        return $this;
    }
    /**
     * Get optional value
     * @return bool|null
     */
    public function getOptional()
    {
        return $this->optional;
    }
    /**
     * Set optional value
     * @param bool $optional
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_action
     */
    public function setOptional($optional = null)
    {
        $this->optional = $optional;
        return $this;
    }
    /**
     * Get send_result_to_archive value
     * @return send_result_to_archive
     */
    public function getSend_result_to_archive()
    {
        return $this->{'send-result-to-archive'};
    }
    /**
     * Set send_result_to_archive value
     * @param send_result_to_archive $send_result_to_archive
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_action
     */
    public function setSend_result_to_archive($send_result_to_archive = null)
    {
        $this->send_result_to_archive = $this->{'send-result-to-archive'} = $send_result_to_archive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Document_action
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
