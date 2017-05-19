<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for create-usersession-response StructType
 * @subpackage Structs
 */
class Create_usersession_response extends AbstractStructBase
{
    /**
     * The user_session_id
     */
    public $user_session_id;
    /**
     * The artifact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $artifact;
    /**
     * Constructor method for create-usersession-response
     * @uses Create_usersession_response::setUser_session_id()
     * @uses Create_usersession_response::setArtifact()
     * @param string $user_session_id
     * @param string $artifact
     */
    public function __construct($user_session_id = null, $artifact = null)
    {
        $this
            ->setUser_session_id($user_session_id)
            ->setArtifact($artifact);
    }
    /**
     * Get user_session_id value
     * @return user_session_id
     */
    public function getUser_session_id()
    {
        return $this->{'user-session-id'};
    }
    /**
     * Set user_session_id value
     * @param user_session_id $user_session_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_usersession_response
     */
    public function setUser_session_id($user_session_id = null)
    {
        // validation for constraint: string
        if (!is_null($user_session_id) && !is_string($user_session_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($user_session_id)), __LINE__);
        }
        $this->user_session_id = $this->{'user-session-id'} = $user_session_id;
        return $this;
    }
    /**
     * Get artifact value
     * @return string|null
     */
    public function getArtifact()
    {
        return $this->artifact;
    }
    /**
     * Set artifact value
     * @param string $artifact
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_usersession_response
     */
    public function setArtifact($artifact = null)
    {
        // validation for constraint: string
        if (!is_null($artifact) && !is_string($artifact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($artifact)), __LINE__);
        }
        $this->artifact = $artifact;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_usersession_response
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
