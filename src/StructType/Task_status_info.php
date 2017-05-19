<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for task-status-info StructType
 * @subpackage Structs
 */
class Task_status_info extends AbstractStructBase
{
    /**
     * The request_id
     */
    public $request_id;
    /**
     * The task_id
     */
    public $task_id;
    /**
     * The task_status
     */
    public $task_status;
    /**
     * The client_reference
     */
    public $client_reference;
    /**
     * The client_status
     */
    public $client_status;
    /**
     * The document_status
     */
    public $document_status;
    /**
     * Constructor method for task-status-info
     * @uses Task_status_info::setRequest_id()
     * @uses Task_status_info::setTask_id()
     * @uses Task_status_info::setTask_status()
     * @uses Task_status_info::setClient_reference()
     * @uses Task_status_info::setClient_status()
     * @uses Task_status_info::setDocument_status()
     * @param string $request_id
     * @param string $task_id
     * @param string $task_status
     * @param string $client_reference
     * @param string $client_status
     * @param \Signicat\DocumentServiceV3_API\StructType\Document_status[] $document_status
     */
    public function __construct($request_id = null, $task_id = null, $task_status = null, $client_reference = null, $client_status = null, array $document_status = array())
    {
        $this
            ->setRequest_id($request_id)
            ->setTask_id($task_id)
            ->setTask_status($task_status)
            ->setClient_reference($client_reference)
            ->setClient_status($client_status)
            ->setDocument_status($document_status);
    }
    /**
     * Get request_id value
     * @return request_id
     */
    public function getRequest_id()
    {
        return $this->{'request-id'};
    }
    /**
     * Set request_id value
     * @param request_id $request_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_status_info
     */
    public function setRequest_id($request_id = null)
    {
        // validation for constraint: string
        if (!is_null($request_id) && !is_string($request_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($request_id)), __LINE__);
        }
        $this->request_id = $this->{'request-id'} = $request_id;
        return $this;
    }
    /**
     * Get task_id value
     * @return task_id
     */
    public function getTask_id()
    {
        return $this->{'task-id'};
    }
    /**
     * Set task_id value
     * @param task_id $task_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_status_info
     */
    public function setTask_id($task_id = null)
    {
        // validation for constraint: string
        if (!is_null($task_id) && !is_string($task_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($task_id)), __LINE__);
        }
        $this->task_id = $this->{'task-id'} = $task_id;
        return $this;
    }
    /**
     * Get task_status value
     * @return task_status
     */
    public function getTask_status()
    {
        return $this->{'task-status'};
    }
    /**
     * Set task_status value
     * @param task_status $task_status
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_status_info
     */
    public function setTask_status($task_status = null)
    {
        // validation for constraint: enumeration
        if (!\Signicat\DocumentServiceV3_API\EnumType\Task_status::valueIsValid($task_status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $task_status, implode(', ', \Signicat\DocumentServiceV3_API\EnumType\Task_status::getValidValues())), __LINE__);
        }
        $this->task_status = $this->{'task-status'} = $task_status;
        return $this;
    }
    /**
     * Get client_reference value
     * @return client_reference
     */
    public function getClient_reference()
    {
        return $this->{'client-reference'};
    }
    /**
     * Set client_reference value
     * @param client_reference $client_reference
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_status_info
     */
    public function setClient_reference($client_reference = null)
    {
        // validation for constraint: string
        if (!is_null($client_reference) && !is_string($client_reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($client_reference)), __LINE__);
        }
        $this->client_reference = $this->{'client-reference'} = $client_reference;
        return $this;
    }
    /**
     * Get client_status value
     * @return client_status
     */
    public function getClient_status()
    {
        return $this->{'client-status'};
    }
    /**
     * Set client_status value
     * @param client_status $client_status
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_status_info
     */
    public function setClient_status($client_status = null)
    {
        // validation for constraint: string
        if (!is_null($client_status) && !is_string($client_status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($client_status)), __LINE__);
        }
        $this->client_status = $this->{'client-status'} = $client_status;
        return $this;
    }
    /**
     * Get document_status value
     * @return document_status
     */
    public function getDocument_status()
    {
        return $this->{'document-status'};
    }
    /**
     * Set document_status value
     * @param document_status $document_status
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_status_info
     */
    public function setDocument_status(array $document_status = array())
    {
        foreach ($document_status as $task_status_infoDocument_statusItem) {
            // validation for constraint: itemType
            if (!$task_status_infoDocument_statusItem instanceof \Signicat\DocumentServiceV3_API\StructType\Document_status) {
                throw new \InvalidArgumentException(sprintf('The document_status property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Document_status, "%s" given', is_object($task_status_infoDocument_statusItem) ? get_class($task_status_infoDocument_statusItem) : gettype($task_status_infoDocument_statusItem)), __LINE__);
            }
        }
        $this->document_status = $this->{'document-status'} = $document_status;
        return $this;
    }
    /**
     */
    public function addToDocument_status(\Signicat\DocumentServiceV3_API\StructType\Document_status $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Document_status) {
            throw new \InvalidArgumentException(sprintf('The document_status property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Document_status, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->document_status[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_status_info
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
