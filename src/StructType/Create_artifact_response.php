<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for create-artifact-response StructType
 * @subpackage Structs
 */
class Create_artifact_response extends AbstractStructBase
{
    /**
     * The artifact
     * @var string
     */
    public $artifact;
    /**
     * Constructor method for create-artifact-response
     * @uses Create_artifact_response::setArtifact()
     * @param string $artifact
     */
    public function __construct($artifact = null)
    {
        $this
            ->setArtifact($artifact);
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_artifact_response
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
     * @return \Signicat\DocumentServiceV3_API\StructType\Create_artifact_response
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
