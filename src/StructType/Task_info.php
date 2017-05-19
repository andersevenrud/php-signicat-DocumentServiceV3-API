<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for task-info StructType
 * @subpackage Structs
 */
class Task_info extends AbstractStructBase
{
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The request_id
     */
    public $request_id;
    /**
     * The task_id
     */
    public $task_id;
    /**
     * The document_id
     */
    public $document_id;
    /**
     * The archive_id
     */
    public $archive_id;
    /**
     * The account
     * @var string
     */
    public $account;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * The task_status
     */
    public $task_status;
    /**
     * The document_description
     */
    public $document_description;
    /**
     * The mime_type
     */
    public $mime_type;
    /**
     * The subject_first_name
     */
    public $subject_first_name;
    /**
     * The subject_last_name
     */
    public $subject_last_name;
    /**
     * The subject_email
     */
    public $subject_email;
    /**
     * The subject_national_id
     */
    public $subject_national_id;
    /**
     * The subject_mobile
     */
    public $subject_mobile;
    /**
     * The created
     * @var string
     */
    public $created;
    /**
     * The last_updated
     */
    public $last_updated;
    /**
     * The signer
     * @var string
     */
    public $signer;
    /**
     * The sender_unique_id
     */
    public $sender_unique_id;
    /**
     * The client_reference
     */
    public $client_reference;
    /**
     * The client_status
     */
    public $client_status;
    /**
     * The days_to_live
     */
    public $days_to_live;
    /**
     * Constructor method for task-info
     * @uses Task_info::setId()
     * @uses Task_info::setRequest_id()
     * @uses Task_info::setTask_id()
     * @uses Task_info::setDocument_id()
     * @uses Task_info::setArchive_id()
     * @uses Task_info::setAccount()
     * @uses Task_info::setLanguage()
     * @uses Task_info::setTask_status()
     * @uses Task_info::setDocument_description()
     * @uses Task_info::setMime_type()
     * @uses Task_info::setSubject_first_name()
     * @uses Task_info::setSubject_last_name()
     * @uses Task_info::setSubject_email()
     * @uses Task_info::setSubject_national_id()
     * @uses Task_info::setSubject_mobile()
     * @uses Task_info::setCreated()
     * @uses Task_info::setLast_updated()
     * @uses Task_info::setSigner()
     * @uses Task_info::setSender_unique_id()
     * @uses Task_info::setClient_reference()
     * @uses Task_info::setClient_status()
     * @uses Task_info::setDays_to_live()
     * @param string $id
     * @param string $request_id
     * @param string $task_id
     * @param string $document_id
     * @param string $archive_id
     * @param string $account
     * @param string $language
     * @param string $task_status
     * @param string $document_description
     * @param string $mime_type
     * @param string $subject_first_name
     * @param string $subject_last_name
     * @param string $subject_email
     * @param string $subject_national_id
     * @param string $subject_mobile
     * @param string $created
     * @param string $last_updated
     * @param string $signer
     * @param string $sender_unique_id
     * @param string $client_reference
     * @param string $client_status
     * @param int $days_to_live
     */
    public function __construct($id = null, $request_id = null, $task_id = null, $document_id = null, $archive_id = null, $account = null, $language = null, $task_status = null, $document_description = null, $mime_type = null, $subject_first_name = null, $subject_last_name = null, $subject_email = null, $subject_national_id = null, $subject_mobile = null, $created = null, $last_updated = null, $signer = null, $sender_unique_id = null, $client_reference = null, $client_status = null, $days_to_live = null)
    {
        $this
            ->setId($id)
            ->setRequest_id($request_id)
            ->setTask_id($task_id)
            ->setDocument_id($document_id)
            ->setArchive_id($archive_id)
            ->setAccount($account)
            ->setLanguage($language)
            ->setTask_status($task_status)
            ->setDocument_description($document_description)
            ->setMime_type($mime_type)
            ->setSubject_first_name($subject_first_name)
            ->setSubject_last_name($subject_last_name)
            ->setSubject_email($subject_email)
            ->setSubject_national_id($subject_national_id)
            ->setSubject_mobile($subject_mobile)
            ->setCreated($created)
            ->setLast_updated($last_updated)
            ->setSigner($signer)
            ->setSender_unique_id($sender_unique_id)
            ->setClient_reference($client_reference)
            ->setClient_status($client_status)
            ->setDays_to_live($days_to_live);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
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
     * Get document_id value
     * @return document_id
     */
    public function getDocument_id()
    {
        return $this->{'document-id'};
    }
    /**
     * Set document_id value
     * @param document_id $document_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
     */
    public function setDocument_id($document_id = null)
    {
        // validation for constraint: string
        if (!is_null($document_id) && !is_string($document_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document_id)), __LINE__);
        }
        $this->document_id = $this->{'document-id'} = $document_id;
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
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
     * Get account value
     * @return string|null
     */
    public function getAccount()
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param string $account
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
     */
    public function setAccount($account = null)
    {
        // validation for constraint: string
        if (!is_null($account) && !is_string($account)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($account)), __LINE__);
        }
        $this->account = $account;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
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
     * Get document_description value
     * @return document_description
     */
    public function getDocument_description()
    {
        return $this->{'document-description'};
    }
    /**
     * Set document_description value
     * @param document_description $document_description
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
     */
    public function setDocument_description($document_description = null)
    {
        // validation for constraint: string
        if (!is_null($document_description) && !is_string($document_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document_description)), __LINE__);
        }
        $this->document_description = $this->{'document-description'} = $document_description;
        return $this;
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
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
     * Get subject_first_name value
     * @return subject_first_name
     */
    public function getSubject_first_name()
    {
        return $this->{'subject-first-name'};
    }
    /**
     * Set subject_first_name value
     * @param subject_first_name $subject_first_name
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
     */
    public function setSubject_first_name($subject_first_name = null)
    {
        // validation for constraint: string
        if (!is_null($subject_first_name) && !is_string($subject_first_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject_first_name)), __LINE__);
        }
        $this->subject_first_name = $this->{'subject-first-name'} = $subject_first_name;
        return $this;
    }
    /**
     * Get subject_last_name value
     * @return subject_last_name
     */
    public function getSubject_last_name()
    {
        return $this->{'subject-last-name'};
    }
    /**
     * Set subject_last_name value
     * @param subject_last_name $subject_last_name
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
     */
    public function setSubject_last_name($subject_last_name = null)
    {
        // validation for constraint: string
        if (!is_null($subject_last_name) && !is_string($subject_last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject_last_name)), __LINE__);
        }
        $this->subject_last_name = $this->{'subject-last-name'} = $subject_last_name;
        return $this;
    }
    /**
     * Get subject_email value
     * @return subject_email
     */
    public function getSubject_email()
    {
        return $this->{'subject-email'};
    }
    /**
     * Set subject_email value
     * @param subject_email $subject_email
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
     */
    public function setSubject_email($subject_email = null)
    {
        // validation for constraint: string
        if (!is_null($subject_email) && !is_string($subject_email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject_email)), __LINE__);
        }
        $this->subject_email = $this->{'subject-email'} = $subject_email;
        return $this;
    }
    /**
     * Get subject_national_id value
     * @return subject_national_id
     */
    public function getSubject_national_id()
    {
        return $this->{'subject-national-id'};
    }
    /**
     * Set subject_national_id value
     * @param subject_national_id $subject_national_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
     */
    public function setSubject_national_id($subject_national_id = null)
    {
        // validation for constraint: string
        if (!is_null($subject_national_id) && !is_string($subject_national_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject_national_id)), __LINE__);
        }
        $this->subject_national_id = $this->{'subject-national-id'} = $subject_national_id;
        return $this;
    }
    /**
     * Get subject_mobile value
     * @return subject_mobile
     */
    public function getSubject_mobile()
    {
        return $this->{'subject-mobile'};
    }
    /**
     * Set subject_mobile value
     * @param subject_mobile $subject_mobile
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
     */
    public function setSubject_mobile($subject_mobile = null)
    {
        // validation for constraint: string
        if (!is_null($subject_mobile) && !is_string($subject_mobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject_mobile)), __LINE__);
        }
        $this->subject_mobile = $this->{'subject-mobile'} = $subject_mobile;
        return $this;
    }
    /**
     * Get created value
     * @return string|null
     */
    public function getCreated()
    {
        return $this->created;
    }
    /**
     * Set created value
     * @param string $created
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
     */
    public function setCreated($created = null)
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($created)), __LINE__);
        }
        $this->created = $created;
        return $this;
    }
    /**
     * Get last_updated value
     * @return last_updated
     */
    public function getLast_updated()
    {
        return $this->{'last-updated'};
    }
    /**
     * Set last_updated value
     * @param last_updated $last_updated
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
     */
    public function setLast_updated($last_updated = null)
    {
        // validation for constraint: string
        if (!is_null($last_updated) && !is_string($last_updated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_updated)), __LINE__);
        }
        $this->last_updated = $this->{'last-updated'} = $last_updated;
        return $this;
    }
    /**
     * Get signer value
     * @return string|null
     */
    public function getSigner()
    {
        return $this->signer;
    }
    /**
     * Set signer value
     * @param string $signer
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
     */
    public function setSigner($signer = null)
    {
        // validation for constraint: string
        if (!is_null($signer) && !is_string($signer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signer)), __LINE__);
        }
        $this->signer = $signer;
        return $this;
    }
    /**
     * Get sender_unique_id value
     * @return sender_unique_id
     */
    public function getSender_unique_id()
    {
        return $this->{'sender-unique-id'};
    }
    /**
     * Set sender_unique_id value
     * @param sender_unique_id $sender_unique_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
     */
    public function setSender_unique_id($sender_unique_id = null)
    {
        // validation for constraint: string
        if (!is_null($sender_unique_id) && !is_string($sender_unique_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sender_unique_id)), __LINE__);
        }
        $this->sender_unique_id = $this->{'sender-unique-id'} = $sender_unique_id;
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
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
     * Get days_to_live value
     * @return days_to_live
     */
    public function getDays_to_live()
    {
        return $this->{'days-to-live'};
    }
    /**
     * Set days_to_live value
     * @param days_to_live $days_to_live
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
     */
    public function setDays_to_live($days_to_live = null)
    {
        // validation for constraint: int
        if (!is_null($days_to_live) && !is_numeric($days_to_live)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($days_to_live)), __LINE__);
        }
        $this->days_to_live = $this->{'days-to-live'} = $days_to_live;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_info
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
