<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for create-request-response StructType
 * @subpackage Structs
 */
class Create_request_response extends AbstractStructBase
{
    /**
     * The request_id
     */
    public $request_id;
    /**
     * The artifact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $artifact;
    /**
     * Constructor method for create-request-response
     * @uses Create_request_response::setRequest_id()
     * @uses Create_request_response::setArtifact()
     * @param string[] $request_id
     * @param string $artifact
     */
    public function __construct(array $request_id = array(), $artifact = null)
    {
        $this
            ->setRequest_id($request_id)
            ->setArtifact($artifact);
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_request_response
     */
    public function setRequest_id(array $request_id = array())
    {
        foreach ($request_id as $create_request_responseRequest_idItem) {
            // validation for constraint: itemType
            if (!is_string($create_request_responseRequest_idItem)) {
                throw new \InvalidArgumentException(sprintf('The request_id property can only contain items of string, "%s" given', is_object($create_request_responseRequest_idItem) ? get_class($create_request_responseRequest_idItem) : gettype($create_request_responseRequest_idItem)), __LINE__);
            }
        }
        $this->request_id = $this->{'request-id'} = $request_id;
        return $this;
    }
    /**
     */
    public function addToRequest_id($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The request_id property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->request_id[] = $item;
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_request_response
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_request_response
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
