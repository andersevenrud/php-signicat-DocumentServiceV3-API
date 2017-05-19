<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for delete-request-response StructType
 * @subpackage Structs
 */
class Delete_request_response extends AbstractStructBase
{
    /**
     * The deleted
     * @var int
     */
    public $deleted;
    /**
     * Constructor method for delete-request-response
     * @uses Delete_request_response::setDeleted()
     * @param int $deleted
     */
    public function __construct($deleted = null)
    {
        $this
            ->setDeleted($deleted);
    }
    /**
     * Get deleted value
     * @return int|null
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
    /**
     * Set deleted value
     * @param int $deleted
     * @return \Signicat\DocumentServiceV3_API\StructType\Delete_request_response
     */
    public function setDeleted($deleted = null)
    {
        // validation for constraint: int
        if (!is_null($deleted) && !is_numeric($deleted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($deleted)), __LINE__);
        }
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Delete_request_response
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
