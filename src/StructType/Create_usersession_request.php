<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for create-usersession-request StructType
 * @subpackage Structs
 */
class Create_usersession_request extends AbstractStructBase
{
    /**
     * The service
     * @var string
     */
    public $service;
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * The user_session
     */
    public $user_session;
    /**
     * Constructor method for create-usersession-request
     * @uses Create_usersession_request::setService()
     * @uses Create_usersession_request::setPassword()
     * @uses Create_usersession_request::setUser_session()
     * @param string $service
     * @param string $password
     * @param \Signicat\DocumentServiceV3_API\StructType\User_session $user_session
     */
    public function __construct($service = null, $password = null, \Signicat\DocumentServiceV3_API\StructType\User_session $user_session = null)
    {
        $this
            ->setService($service)
            ->setPassword($password)
            ->setUser_session($user_session);
    }
    /**
     * Get service value
     * @return string|null
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_usersession_request
     */
    public function setService($service = null)
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($service)), __LINE__);
        }
        $this->service = $service;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_usersession_request
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get user_session value
     * @return user_session
     */
    public function getUser_session()
    {
        return $this->{'user-session'};
    }
    /**
     * Set user_session value
     * @param user_session $user_session
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_usersession_request
     */
    public function setUser_session(\Signicat\DocumentServiceV3_API\StructType\User_session $user_session = null)
    {
        $this->user_session = $this->{'user-session'} = $user_session;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_usersession_request
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
