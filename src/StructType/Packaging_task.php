<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for packaging-task StructType
 * @subpackage Structs
 */
class Packaging_task extends AbstractStructBase
{
    /**
     * The packaging_task_id
     */
    public $packaging_task_id;
    /**
     * The method
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $method;
    /**
     * The packaging_notification
     */
    public $packaging_notification;
    /**
     * The packaging_task_document
     */
    public $packaging_task_document;
    /**
     * The send_to_archive
     */
    public $send_to_archive;
    /**
     * Constructor method for packaging-task
     * @uses Packaging_task::setPackaging_task_id()
     * @uses Packaging_task::setMethod()
     * @uses Packaging_task::setPackaging_notification()
     * @uses Packaging_task::setPackaging_task_document()
     * @uses Packaging_task::setSend_to_archive()
     * @param string $packaging_task_id
     * @param string $method
     * @param \Signicat\DocumentServiceV3_API\StructType\Notification[] $packaging_notification
     * @param \Signicat\DocumentServiceV3_API\StructType\Packaging_task_document[] $packaging_task_document
     * @param bool $send_to_archive
     */
    public function __construct($packaging_task_id = null, $method = null, array $packaging_notification = array(), array $packaging_task_document = array(), $send_to_archive = null)
    {
        $this
            ->setPackaging_task_id($packaging_task_id)
            ->setMethod($method)
            ->setPackaging_notification($packaging_notification)
            ->setPackaging_task_document($packaging_task_document)
            ->setSend_to_archive($send_to_archive);
    }
    /**
     * Get packaging_task_id value
     * @return packaging_task_id
     */
    public function getPackaging_task_id()
    {
        return $this->{'packaging-task-id'};
    }
    /**
     * Set packaging_task_id value
     * @param packaging_task_id $packaging_task_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Packaging_task
     */
    public function setPackaging_task_id($packaging_task_id = null)
    {
        // validation for constraint: string
        if (!is_null($packaging_task_id) && !is_string($packaging_task_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packaging_task_id)), __LINE__);
        }
        $this->packaging_task_id = $this->{'packaging-task-id'} = $packaging_task_id;
        return $this;
    }
    /**
     * Get method value
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }
    /**
     * Set method value
     * @param string $method
     * @return \Signicat\DocumentServiceV3_API\StructType\Packaging_task
     */
    public function setMethod($method = null)
    {
        // validation for constraint: string
        if (!is_null($method) && !is_string($method)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($method)), __LINE__);
        }
        $this->method = $method;
        return $this;
    }
    /**
     * Get packaging_notification value
     * @return packaging_notification
     */
    public function getPackaging_notification()
    {
        return $this->{'packaging-notification'};
    }
    /**
     * Set packaging_notification value
     * @param packaging_notification $packaging_notification
     * @return \Signicat\DocumentServiceV3_API\StructType\Packaging_task
     */
    public function setPackaging_notification(array $packaging_notification = array())
    {
        foreach ($packaging_notification as $packaging_taskPackaging_notificationItem) {
            // validation for constraint: itemType
            if (!$packaging_taskPackaging_notificationItem instanceof \Signicat\DocumentServiceV3_API\StructType\Notification) {
                throw new \InvalidArgumentException(sprintf('The packaging_notification property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Notification, "%s" given', is_object($packaging_taskPackaging_notificationItem) ? get_class($packaging_taskPackaging_notificationItem) : gettype($packaging_taskPackaging_notificationItem)), __LINE__);
            }
        }
        $this->packaging_notification = $this->{'packaging-notification'} = $packaging_notification;
        return $this;
    }
    /**
     */
    public function addToPackaging_notification(\Signicat\DocumentServiceV3_API\StructType\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Notification) {
            throw new \InvalidArgumentException(sprintf('The packaging_notification property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->packaging_notification[] = $item;
        return $this;
    }
    /**
     * Get packaging_task_document value
     * @return packaging_task_document
     */
    public function getPackaging_task_document()
    {
        return $this->{'packaging-task-document'};
    }
    /**
     * Set packaging_task_document value
     * @param packaging_task_document $packaging_task_document
     * @return \Signicat\DocumentServiceV3_API\StructType\Packaging_task
     */
    public function setPackaging_task_document(array $packaging_task_document = array())
    {
        foreach ($packaging_task_document as $packaging_taskPackaging_task_documentItem) {
            // validation for constraint: itemType
            if (!$packaging_taskPackaging_task_documentItem instanceof \Signicat\DocumentServiceV3_API\StructType\Packaging_task_document) {
                throw new \InvalidArgumentException(sprintf('The packaging_task_document property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Packaging_task_document, "%s" given', is_object($packaging_taskPackaging_task_documentItem) ? get_class($packaging_taskPackaging_task_documentItem) : gettype($packaging_taskPackaging_task_documentItem)), __LINE__);
            }
        }
        $this->packaging_task_document = $this->{'packaging-task-document'} = $packaging_task_document;
        return $this;
    }
    /**
     */
    public function addToPackaging_task_document(\Signicat\DocumentServiceV3_API\StructType\Packaging_task_document $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Packaging_task_document) {
            throw new \InvalidArgumentException(sprintf('The packaging_task_document property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Packaging_task_document, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->packaging_task_document[] = $item;
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Packaging_task
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Packaging_task
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
