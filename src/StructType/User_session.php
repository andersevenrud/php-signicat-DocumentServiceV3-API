<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for user-session StructType
 * @subpackage Structs
 */
class User_session extends AbstractStructBase
{
    /**
     * The language
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $language;
    /**
     * The on_session_postpone
     */
    public $on_session_postpone;
    /**
     * The on_session_complete
     */
    public $on_session_complete;
    /**
     * The on_session_cancel
     */
    public $on_session_cancel;
    /**
     * The session_task
     */
    public $session_task;
    /**
     * Constructor method for user-session
     * @uses User_session::setLanguage()
     * @uses User_session::setOn_session_postpone()
     * @uses User_session::setOn_session_complete()
     * @uses User_session::setOn_session_cancel()
     * @uses User_session::setSession_task()
     * @param string $language
     * @param string $on_session_postpone
     * @param string $on_session_complete
     * @param string $on_session_cancel
     * @param \Signicat\DocumentServiceV3_API\StructType\Session_task_info[] $session_task
     */
    public function __construct($language = null, $on_session_postpone = null, $on_session_complete = null, $on_session_cancel = null, array $session_task = array())
    {
        $this
            ->setLanguage($language)
            ->setOn_session_postpone($on_session_postpone)
            ->setOn_session_complete($on_session_complete)
            ->setOn_session_cancel($on_session_cancel)
            ->setSession_task($session_task);
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
     * @return \Signicat\DocumentServiceV3_API\StructType\User_session
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
     * Get on_session_postpone value
     * @return on_session_postpone
     */
    public function getOn_session_postpone()
    {
        return $this->{'on-session-postpone'};
    }
    /**
     * Set on_session_postpone value
     * @param on_session_postpone $on_session_postpone
     * @return \Signicat\DocumentServiceV3_API\StructType\User_session
     */
    public function setOn_session_postpone($on_session_postpone = null)
    {
        // validation for constraint: string
        if (!is_null($on_session_postpone) && !is_string($on_session_postpone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($on_session_postpone)), __LINE__);
        }
        $this->on_session_postpone = $this->{'on-session-postpone'} = $on_session_postpone;
        return $this;
    }
    /**
     * Get on_session_complete value
     * @return on_session_complete
     */
    public function getOn_session_complete()
    {
        return $this->{'on-session-complete'};
    }
    /**
     * Set on_session_complete value
     * @param on_session_complete $on_session_complete
     * @return \Signicat\DocumentServiceV3_API\StructType\User_session
     */
    public function setOn_session_complete($on_session_complete = null)
    {
        // validation for constraint: string
        if (!is_null($on_session_complete) && !is_string($on_session_complete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($on_session_complete)), __LINE__);
        }
        $this->on_session_complete = $this->{'on-session-complete'} = $on_session_complete;
        return $this;
    }
    /**
     * Get on_session_cancel value
     * @return on_session_cancel
     */
    public function getOn_session_cancel()
    {
        return $this->{'on-session-cancel'};
    }
    /**
     * Set on_session_cancel value
     * @param on_session_cancel $on_session_cancel
     * @return \Signicat\DocumentServiceV3_API\StructType\User_session
     */
    public function setOn_session_cancel($on_session_cancel = null)
    {
        // validation for constraint: string
        if (!is_null($on_session_cancel) && !is_string($on_session_cancel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($on_session_cancel)), __LINE__);
        }
        $this->on_session_cancel = $this->{'on-session-cancel'} = $on_session_cancel;
        return $this;
    }
    /**
     * Get session_task value
     * @return session_task
     */
    public function getSession_task()
    {
        return $this->{'session-task'};
    }
    /**
     * Set session_task value
     * @param session_task $session_task
     * @return \Signicat\DocumentServiceV3_API\StructType\User_session
     */
    public function setSession_task(array $session_task = array())
    {
        foreach ($session_task as $user_sessionSession_taskItem) {
            // validation for constraint: itemType
            if (!$user_sessionSession_taskItem instanceof \Signicat\DocumentServiceV3_API\StructType\Session_task_info) {
                throw new \InvalidArgumentException(sprintf('The session_task property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Session_task_info, "%s" given', is_object($user_sessionSession_taskItem) ? get_class($user_sessionSession_taskItem) : gettype($user_sessionSession_taskItem)), __LINE__);
            }
        }
        $this->session_task = $this->{'session-task'} = $session_task;
        return $this;
    }
    /**
     */
    public function addToSession_task(\Signicat\DocumentServiceV3_API\StructType\Session_task_info $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Session_task_info) {
            throw new \InvalidArgumentException(sprintf('The session_task property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Session_task_info, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->session_task[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\User_session
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
