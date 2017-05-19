<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sender StructType
 * @subpackage Structs
 */
class Sender extends AbstractStructBase
{
    /**
     * The unique_id
     */
    public $unique_id;
    /**
     * The first_name
     */
    public $first_name;
    /**
     * The last_name
     */
    public $last_name;
    /**
     * Constructor method for sender
     * @uses Sender::setUnique_id()
     * @uses Sender::setFirst_name()
     * @uses Sender::setLast_name()
     * @param string $unique_id
     * @param string $first_name
     * @param string $last_name
     */
    public function __construct($unique_id = null, $first_name = null, $last_name = null)
    {
        $this
            ->setUnique_id($unique_id)
            ->setFirst_name($first_name)
            ->setLast_name($last_name);
    }
    /**
     * Get unique_id value
     * @return unique_id
     */
    public function getUnique_id()
    {
        return $this->{'unique-id'};
    }
    /**
     * Set unique_id value
     * @param unique_id $unique_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Sender
     */
    public function setUnique_id($unique_id = null)
    {
        // validation for constraint: string
        if (!is_null($unique_id) && !is_string($unique_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unique_id)), __LINE__);
        }
        $this->unique_id = $this->{'unique-id'} = $unique_id;
        return $this;
    }
    /**
     * Get first_name value
     * @return first_name
     */
    public function getFirst_name()
    {
        return $this->{'first-name'};
    }
    /**
     * Set first_name value
     * @param first_name $first_name
     * @return \Signicat\DocumentServiceV3_API\StructType\Sender
     */
    public function setFirst_name($first_name = null)
    {
        // validation for constraint: string
        if (!is_null($first_name) && !is_string($first_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($first_name)), __LINE__);
        }
        $this->first_name = $this->{'first-name'} = $first_name;
        return $this;
    }
    /**
     * Get last_name value
     * @return last_name
     */
    public function getLast_name()
    {
        return $this->{'last-name'};
    }
    /**
     * Set last_name value
     * @param last_name $last_name
     * @return \Signicat\DocumentServiceV3_API\StructType\Sender
     */
    public function setLast_name($last_name = null)
    {
        // validation for constraint: string
        if (!is_null($last_name) && !is_string($last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_name)), __LINE__);
        }
        $this->last_name = $this->{'last-name'} = $last_name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Sender
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
