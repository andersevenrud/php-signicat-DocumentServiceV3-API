<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for task StructType
 * @subpackage Structs
 */
class Task extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $id;
    /**
     * The subject_ref
     */
    public $subject_ref;
    /**
     * The subject
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Signicat\DocumentServiceV3_API\StructType\Subject
     */
    public $subject;
    /**
     * The days_to_live
     */
    public $days_to_live;
    /**
     * The dialog
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Signicat\DocumentServiceV3_API\StructType\Dialog
     */
    public $dialog;
    /**
     * The document_action
     */
    public $document_action;
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
     * The authentication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Signicat\DocumentServiceV3_API\StructType\Authentication
     */
    public $authentication;
    /**
     * The on_task_postpone
     */
    public $on_task_postpone;
    /**
     * The on_task_complete
     */
    public $on_task_complete;
    /**
     * The on_task_cancel
     */
    public $on_task_cancel;
    /**
     * The depends_on_task
     */
    public $depends_on_task;
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
     * The configuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $configuration;
    /**
     * The signature
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Signicat\DocumentServiceV3_API\StructType\Signature[]
     */
    public $signature;
    /**
     * The authentication_based_signature
     */
    public $authentication_based_signature;
    /**
     * The bundle
     * @var bool
     */
    public $bundle;
    /**
     * Constructor method for task
     * @uses Task::setId()
     * @uses Task::setSubject_ref()
     * @uses Task::setSubject()
     * @uses Task::setDays_to_live()
     * @uses Task::setDialog()
     * @uses Task::setDocument_action()
     * @uses Task::setNotification()
     * @uses Task::setAuthentication()
     * @uses Task::setOn_task_postpone()
     * @uses Task::setOn_task_complete()
     * @uses Task::setOn_task_cancel()
     * @uses Task::setDepends_on_task()
     * @uses Task::setProfile()
     * @uses Task::setLanguage()
     * @uses Task::setConfiguration()
     * @uses Task::setSignature()
     * @uses Task::setAuthentication_based_signature()
     * @uses Task::setBundle()
     * @param string $id
     * @param string $subject_ref
     * @param \Signicat\DocumentServiceV3_API\StructType\Subject $subject
     * @param int $days_to_live
     * @param \Signicat\DocumentServiceV3_API\StructType\Dialog $dialog
     * @param \Signicat\DocumentServiceV3_API\StructType\Document_action[] $document_action
     * @param \Signicat\DocumentServiceV3_API\StructType\Notification[] $notification
     * @param \Signicat\DocumentServiceV3_API\StructType\Authentication $authentication
     * @param string $on_task_postpone
     * @param string $on_task_complete
     * @param string $on_task_cancel
     * @param string[] $depends_on_task
     * @param string $profile
     * @param string $language
     * @param string $configuration
     * @param \Signicat\DocumentServiceV3_API\StructType\Signature[] $signature
     * @param \Signicat\DocumentServiceV3_API\StructType\Authentication_based_signature[] $authentication_based_signature
     * @param bool $bundle
     */
    public function __construct($id = null, $subject_ref = null, \Signicat\DocumentServiceV3_API\StructType\Subject $subject = null, $days_to_live = null, \Signicat\DocumentServiceV3_API\StructType\Dialog $dialog = null, array $document_action = array(), array $notification = array(), \Signicat\DocumentServiceV3_API\StructType\Authentication $authentication = null, $on_task_postpone = null, $on_task_complete = null, $on_task_cancel = null, array $depends_on_task = array(), $profile = null, $language = null, $configuration = null, array $signature = array(), array $authentication_based_signature = array(), $bundle = null)
    {
        $this
            ->setId($id)
            ->setSubject_ref($subject_ref)
            ->setSubject($subject)
            ->setDays_to_live($days_to_live)
            ->setDialog($dialog)
            ->setDocument_action($document_action)
            ->setNotification($notification)
            ->setAuthentication($authentication)
            ->setOn_task_postpone($on_task_postpone)
            ->setOn_task_complete($on_task_complete)
            ->setOn_task_cancel($on_task_cancel)
            ->setDepends_on_task($depends_on_task)
            ->setProfile($profile)
            ->setLanguage($language)
            ->setConfiguration($configuration)
            ->setSignature($signature)
            ->setAuthentication_based_signature($authentication_based_signature)
            ->setBundle($bundle);
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
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
     * Get subject_ref value
     * @return subject_ref
     */
    public function getSubject_ref()
    {
        return $this->{'subject-ref'};
    }
    /**
     * Set subject_ref value
     * @param subject_ref $subject_ref
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public function setSubject_ref($subject_ref = null)
    {
        // validation for constraint: string
        if (!is_null($subject_ref) && !is_string($subject_ref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject_ref)), __LINE__);
        }
        $this->subject_ref = $this->{'subject-ref'} = $subject_ref;
        return $this;
    }
    /**
     * Get subject value
     * @return \Signicat\DocumentServiceV3_API\StructType\Subject|null
     */
    public function getSubject()
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param \Signicat\DocumentServiceV3_API\StructType\Subject $subject
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public function setSubject(\Signicat\DocumentServiceV3_API\StructType\Subject $subject = null)
    {
        $this->subject = $subject;
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public function setDialog(\Signicat\DocumentServiceV3_API\StructType\Dialog $dialog = null)
    {
        $this->dialog = $dialog;
        return $this;
    }
    /**
     * Get document_action value
     * @return document_action
     */
    public function getDocument_action()
    {
        return $this->{'document-action'};
    }
    /**
     * Set document_action value
     * @param document_action $document_action
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public function setDocument_action(array $document_action = array())
    {
        foreach ($document_action as $taskDocument_actionItem) {
            // validation for constraint: itemType
            if (!$taskDocument_actionItem instanceof \Signicat\DocumentServiceV3_API\StructType\Document_action) {
                throw new \InvalidArgumentException(sprintf('The document_action property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Document_action, "%s" given', is_object($taskDocument_actionItem) ? get_class($taskDocument_actionItem) : gettype($taskDocument_actionItem)), __LINE__);
            }
        }
        $this->document_action = $this->{'document-action'} = $document_action;
        return $this;
    }
    /**
     */
    public function addToDocument_action(\Signicat\DocumentServiceV3_API\StructType\Document_action $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Document_action) {
            throw new \InvalidArgumentException(sprintf('The document_action property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Document_action, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->document_action[] = $item;
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public function setNotification(array $notification = array())
    {
        foreach ($notification as $taskNotificationItem) {
            // validation for constraint: itemType
            if (!$taskNotificationItem instanceof \Signicat\DocumentServiceV3_API\StructType\Notification) {
                throw new \InvalidArgumentException(sprintf('The notification property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Notification, "%s" given', is_object($taskNotificationItem) ? get_class($taskNotificationItem) : gettype($taskNotificationItem)), __LINE__);
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
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
     * Get authentication value
     * @return \Signicat\DocumentServiceV3_API\StructType\Authentication|null
     */
    public function getAuthentication()
    {
        return $this->authentication;
    }
    /**
     * Set authentication value
     * @param \Signicat\DocumentServiceV3_API\StructType\Authentication $authentication
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public function setAuthentication(\Signicat\DocumentServiceV3_API\StructType\Authentication $authentication = null)
    {
        $this->authentication = $authentication;
        return $this;
    }
    /**
     * Get on_task_postpone value
     * @return on_task_postpone
     */
    public function getOn_task_postpone()
    {
        return $this->{'on-task-postpone'};
    }
    /**
     * Set on_task_postpone value
     * @param on_task_postpone $on_task_postpone
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public function setOn_task_postpone($on_task_postpone = null)
    {
        // validation for constraint: string
        if (!is_null($on_task_postpone) && !is_string($on_task_postpone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($on_task_postpone)), __LINE__);
        }
        $this->on_task_postpone = $this->{'on-task-postpone'} = $on_task_postpone;
        return $this;
    }
    /**
     * Get on_task_complete value
     * @return on_task_complete
     */
    public function getOn_task_complete()
    {
        return $this->{'on-task-complete'};
    }
    /**
     * Set on_task_complete value
     * @param on_task_complete $on_task_complete
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public function setOn_task_complete($on_task_complete = null)
    {
        // validation for constraint: string
        if (!is_null($on_task_complete) && !is_string($on_task_complete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($on_task_complete)), __LINE__);
        }
        $this->on_task_complete = $this->{'on-task-complete'} = $on_task_complete;
        return $this;
    }
    /**
     * Get on_task_cancel value
     * @return on_task_cancel
     */
    public function getOn_task_cancel()
    {
        return $this->{'on-task-cancel'};
    }
    /**
     * Set on_task_cancel value
     * @param on_task_cancel $on_task_cancel
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public function setOn_task_cancel($on_task_cancel = null)
    {
        // validation for constraint: string
        if (!is_null($on_task_cancel) && !is_string($on_task_cancel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($on_task_cancel)), __LINE__);
        }
        $this->on_task_cancel = $this->{'on-task-cancel'} = $on_task_cancel;
        return $this;
    }
    /**
     * Get depends_on_task value
     * @return depends_on_task
     */
    public function getDepends_on_task()
    {
        return $this->{'depends-on-task'};
    }
    /**
     * Set depends_on_task value
     * @param depends_on_task $depends_on_task
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public function setDepends_on_task(array $depends_on_task = array())
    {
        foreach ($depends_on_task as $taskDepends_on_taskItem) {
            // validation for constraint: itemType
            if (!is_string($taskDepends_on_taskItem)) {
                throw new \InvalidArgumentException(sprintf('The depends_on_task property can only contain items of string, "%s" given', is_object($taskDepends_on_taskItem) ? get_class($taskDepends_on_taskItem) : gettype($taskDepends_on_taskItem)), __LINE__);
            }
        }
        $this->depends_on_task = $this->{'depends-on-task'} = $depends_on_task;
        return $this;
    }
    /**
     */
    public function addToDepends_on_task($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The depends_on_task property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->depends_on_task[] = $item;
        return $this;
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
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
     * Get configuration value
     * @return string|null
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }
    /**
     * Set configuration value
     * @param string $configuration
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public function setConfiguration($configuration = null)
    {
        // validation for constraint: string
        if (!is_null($configuration) && !is_string($configuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($configuration)), __LINE__);
        }
        $this->configuration = $configuration;
        return $this;
    }
    /**
     * Get signature value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Signicat\DocumentServiceV3_API\StructType\Signature[]|null
     */
    public function getSignature()
    {
        return isset($this->signature) ? $this->signature : null;
    }
    /**
     * Set signature value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Signature[] $signature
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public function setSignature(array $signature = array())
    {
        foreach ($signature as $taskSignatureItem) {
            // validation for constraint: itemType
            if (!$taskSignatureItem instanceof \Signicat\DocumentServiceV3_API\StructType\Signature) {
                throw new \InvalidArgumentException(sprintf('The signature property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Signature, "%s" given', is_object($taskSignatureItem) ? get_class($taskSignatureItem) : gettype($taskSignatureItem)), __LINE__);
            }
        }
        if (is_null($signature) || (is_array($signature) && empty($signature))) {
            unset($this->signature);
        } else {
            $this->signature = $signature;
        }
        return $this;
    }
    /**
     * Add item to signature value
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Signature $item
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public function addToSignature(\Signicat\DocumentServiceV3_API\StructType\Signature $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Signature) {
            throw new \InvalidArgumentException(sprintf('The signature property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Signature, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->signature[] = $item;
        return $this;
    }
    /**
     * Get authentication_based_signature value
     * @return authentication_based_signature
     */
    public function getAuthentication_based_signature()
    {
        return $this->{'authentication-based-signature'};
    }
    /**
     * Set authentication_based_signature value
     * @param authentication_based_signature $authentication_based_signature
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public function setAuthentication_based_signature(array $authentication_based_signature = array())
    {
        foreach ($authentication_based_signature as $taskAuthentication_based_signatureItem) {
            // validation for constraint: itemType
            if (!$taskAuthentication_based_signatureItem instanceof \Signicat\DocumentServiceV3_API\StructType\Authentication_based_signature) {
                throw new \InvalidArgumentException(sprintf('The authentication_based_signature property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Authentication_based_signature, "%s" given', is_object($taskAuthentication_based_signatureItem) ? get_class($taskAuthentication_based_signatureItem) : gettype($taskAuthentication_based_signatureItem)), __LINE__);
            }
        }
        $this->authentication_based_signature = $this->{'authentication-based-signature'} = $authentication_based_signature;
        return $this;
    }
    /**
     */
    public function addToAuthentication_based_signature(\Signicat\DocumentServiceV3_API\StructType\Authentication_based_signature $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Authentication_based_signature) {
            throw new \InvalidArgumentException(sprintf('The authentication_based_signature property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Authentication_based_signature, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->authentication_based_signature[] = $item;
        return $this;
    }
    /**
     * Get bundle value
     * @return bool|null
     */
    public function getBundle()
    {
        return $this->bundle;
    }
    /**
     * Set bundle value
     * @param bool $bundle
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
     */
    public function setBundle($bundle = null)
    {
        $this->bundle = $bundle;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Task
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
