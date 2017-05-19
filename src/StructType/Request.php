<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for request StructType
 * @subpackage Structs
 */
class Request extends AbstractStructBase
{
    /**
     * The profile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $profile;
    /**
     * The language
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $language;
    /**
     * The subject
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Signicat\DocumentServiceV3_API\StructType\Subject[]
     */
    public $subject;
    /**
     * The document
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Signicat\DocumentServiceV3_API\StructType\Document[]
     */
    public $document;
    /**
     * The task
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Signicat\DocumentServiceV3_API\StructType\Task[]
     */
    public $task;
    /**
     * The client_reference
     */
    public $client_reference;
    /**
     * The sender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Signicat\DocumentServiceV3_API\StructType\Sender
     */
    public $sender;
    /**
     * The notification
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Signicat\DocumentServiceV3_API\StructType\Notification[]
     */
    public $notification;
    /**
     * The days_until_deletion
     */
    public $days_until_deletion;
    /**
     * The sdo_format
     */
    public $sdo_format;
    /**
     * The account
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $account;
    /**
     * The packaging_task
     */
    public $packaging_task;
    /**
     * Constructor method for request
     * @uses Request::setProfile()
     * @uses Request::setLanguage()
     * @uses Request::setSubject()
     * @uses Request::setDocument()
     * @uses Request::setTask()
     * @uses Request::setClient_reference()
     * @uses Request::setSender()
     * @uses Request::setNotification()
     * @uses Request::setDays_until_deletion()
     * @uses Request::setSdo_format()
     * @uses Request::setAccount()
     * @uses Request::setPackaging_task()
     * @param string $profile
     * @param string $language
     * @param \Signicat\DocumentServiceV3_API\StructType\Subject[] $subject
     * @param \Signicat\DocumentServiceV3_API\StructType\Document[] $document
     * @param \Signicat\DocumentServiceV3_API\StructType\Task[] $task
     * @param string $client_reference
     * @param \Signicat\DocumentServiceV3_API\StructType\Sender $sender
     * @param \Signicat\DocumentServiceV3_API\StructType\Notification[] $notification
     * @param int $days_until_deletion
     * @param string $sdo_format
     * @param string $account
     * @param \Signicat\DocumentServiceV3_API\StructType\Packaging_task[] $packaging_task
     */
    public function __construct($profile = null, $language = null, array $subject = array(), array $document = array(), array $task = array(), $client_reference = null, \Signicat\DocumentServiceV3_API\StructType\Sender $sender = null, array $notification = array(), $days_until_deletion = null, $sdo_format = 'native', $account = null, array $packaging_task = array())
    {
        $this
            ->setProfile($profile)
            ->setLanguage($language)
            ->setSubject($subject)
            ->setDocument($document)
            ->setTask($task)
            ->setClient_reference($client_reference)
            ->setSender($sender)
            ->setNotification($notification)
            ->setDays_until_deletion($days_until_deletion)
            ->setSdo_format($sdo_format)
            ->setAccount($account)
            ->setPackaging_task($packaging_task);
    }
    /**
     * Get profile value
     * @return string|null
     */
    public function getProfile()
    {
        return $this->profile;
    }
    /**
     * Set profile value
     * @param string $profile
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
     */
    public function setProfile($profile = null)
    {
        // validation for constraint: string
        if (!is_null($profile) && !is_string($profile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profile)), __LINE__);
        }
        $this->profile = $profile;
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
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
     * Get subject value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Signicat\DocumentServiceV3_API\StructType\Subject[]|null
     */
    public function getSubject()
    {
        return isset($this->subject) ? $this->subject : null;
    }
    /**
     * Set subject value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Subject[] $subject
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
     */
    public function setSubject(array $subject = array())
    {
        foreach ($subject as $requestSubjectItem) {
            // validation for constraint: itemType
            if (!$requestSubjectItem instanceof \Signicat\DocumentServiceV3_API\StructType\Subject) {
                throw new \InvalidArgumentException(sprintf('The subject property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Subject, "%s" given', is_object($requestSubjectItem) ? get_class($requestSubjectItem) : gettype($requestSubjectItem)), __LINE__);
            }
        }
        if (is_null($subject) || (is_array($subject) && empty($subject))) {
            unset($this->subject);
        } else {
            $this->subject = $subject;
        }
        return $this;
    }
    /**
     * Add item to subject value
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Subject $item
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
     */
    public function addToSubject(\Signicat\DocumentServiceV3_API\StructType\Subject $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Subject) {
            throw new \InvalidArgumentException(sprintf('The subject property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Subject, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->subject[] = $item;
        return $this;
    }
    /**
     * Get document value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Signicat\DocumentServiceV3_API\StructType\Document[]|null
     */
    public function getDocument()
    {
        return isset($this->document) ? $this->document : null;
    }
    /**
     * Set document value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Document[] $document
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
     */
    public function setDocument(array $document = array())
    {
        foreach ($document as $requestDocumentItem) {
            // validation for constraint: itemType
            if (!$requestDocumentItem instanceof \Signicat\DocumentServiceV3_API\StructType\Document) {
                throw new \InvalidArgumentException(sprintf('The document property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Document, "%s" given', is_object($requestDocumentItem) ? get_class($requestDocumentItem) : gettype($requestDocumentItem)), __LINE__);
            }
        }
        if (is_null($document) || (is_array($document) && empty($document))) {
            unset($this->document);
        } else {
            $this->document = $document;
        }
        return $this;
    }
    /**
     * Add item to document value
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Document $item
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
     */
    public function addToDocument(\Signicat\DocumentServiceV3_API\StructType\Document $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Document) {
            throw new \InvalidArgumentException(sprintf('The document property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Document, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->document[] = $item;
        return $this;
    }
    /**
     * Get task value
     * @return \Signicat\DocumentServiceV3_API\StructType\Task[]|null
     */
    public function getTask()
    {
        return $this->task;
    }
    /**
     * Set task value
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Task[] $task
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
     */
    public function setTask(array $task = array())
    {
        foreach ($task as $requestTaskItem) {
            // validation for constraint: itemType
            if (!$requestTaskItem instanceof \Signicat\DocumentServiceV3_API\StructType\Task) {
                throw new \InvalidArgumentException(sprintf('The task property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Task, "%s" given', is_object($requestTaskItem) ? get_class($requestTaskItem) : gettype($requestTaskItem)), __LINE__);
            }
        }
        $this->task = $task;
        return $this;
    }
    /**
     * Add item to task value
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Task $item
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
     */
    public function addToTask(\Signicat\DocumentServiceV3_API\StructType\Task $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Task) {
            throw new \InvalidArgumentException(sprintf('The task property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Task, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->task[] = $item;
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
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
     * Get sender value
     * @return \Signicat\DocumentServiceV3_API\StructType\Sender|null
     */
    public function getSender()
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param \Signicat\DocumentServiceV3_API\StructType\Sender $sender
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
     */
    public function setSender(\Signicat\DocumentServiceV3_API\StructType\Sender $sender = null)
    {
        $this->sender = $sender;
        return $this;
    }
    /**
     * Get notification value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Signicat\DocumentServiceV3_API\StructType\Notification[]|null
     */
    public function getNotification()
    {
        return isset($this->notification) ? $this->notification : null;
    }
    /**
     * Set notification value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Notification[] $notification
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
     */
    public function setNotification(array $notification = array())
    {
        foreach ($notification as $requestNotificationItem) {
            // validation for constraint: itemType
            if (!$requestNotificationItem instanceof \Signicat\DocumentServiceV3_API\StructType\Notification) {
                throw new \InvalidArgumentException(sprintf('The notification property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Notification, "%s" given', is_object($requestNotificationItem) ? get_class($requestNotificationItem) : gettype($requestNotificationItem)), __LINE__);
            }
        }
        if (is_null($notification) || (is_array($notification) && empty($notification))) {
            unset($this->notification);
        } else {
            $this->notification = $notification;
        }
        return $this;
    }
    /**
     * Add item to notification value
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Notification $item
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
     */
    public function addToNotification(\Signicat\DocumentServiceV3_API\StructType\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Notification) {
            throw new \InvalidArgumentException(sprintf('The notification property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->notification[] = $item;
        return $this;
    }
    /**
     * Get days_until_deletion value
     * @return days_until_deletion
     */
    public function getDays_until_deletion()
    {
        return $this->{'days-until-deletion'};
    }
    /**
     * Set days_until_deletion value
     * @param days_until_deletion $days_until_deletion
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
     */
    public function setDays_until_deletion($days_until_deletion = null)
    {
        // validation for constraint: int
        if (!is_null($days_until_deletion) && !is_numeric($days_until_deletion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($days_until_deletion)), __LINE__);
        }
        $this->days_until_deletion = $this->{'days-until-deletion'} = $days_until_deletion;
        return $this;
    }
    /**
     * Get sdo_format value
     * @return sdo_format
     */
    public function getSdo_format()
    {
        return $this->{'sdo-format'};
    }
    /**
     * Set sdo_format value
     * @param sdo_format $sdo_format
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
     */
    public function setSdo_format($sdo_format = 'native')
    {
        // validation for constraint: string
        if (!is_null($sdo_format) && !is_string($sdo_format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sdo_format)), __LINE__);
        }
        $this->sdo_format = $this->{'sdo-format'} = $sdo_format;
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
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
     * Get packaging_task value
     * @return packaging_task
     */
    public function getPackaging_task()
    {
        return $this->{'packaging-task'};
    }
    /**
     * Set packaging_task value
     * @param packaging_task $packaging_task
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
     */
    public function setPackaging_task(array $packaging_task = array())
    {
        foreach ($packaging_task as $requestPackaging_taskItem) {
            // validation for constraint: itemType
            if (!$requestPackaging_taskItem instanceof \Signicat\DocumentServiceV3_API\StructType\Packaging_task) {
                throw new \InvalidArgumentException(sprintf('The packaging_task property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Packaging_task, "%s" given', is_object($requestPackaging_taskItem) ? get_class($requestPackaging_taskItem) : gettype($requestPackaging_taskItem)), __LINE__);
            }
        }
        $this->packaging_task = $this->{'packaging-task'} = $packaging_task;
        return $this;
    }
    /**
     */
    public function addToPackaging_task(\Signicat\DocumentServiceV3_API\StructType\Packaging_task $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Packaging_task) {
            throw new \InvalidArgumentException(sprintf('The packaging_task property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Packaging_task, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->packaging_task[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Request
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
