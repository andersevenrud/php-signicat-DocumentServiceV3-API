<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for method StructType
 * @subpackage Structs
 */
class Method extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The handwritten
     * @var bool
     */
    public $handwritten;
    /**
     * Constructor method for method
     * @uses Method::set_()
     * @uses Method::setHandwritten()
     * @param string $_
     * @param bool $handwritten
     */
    public function __construct($_ = null, $handwritten = null)
    {
        $this
            ->set_($_)
            ->setHandwritten($handwritten);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Signicat\DocumentServiceV3_API\StructType\Method
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get handwritten value
     * @return bool|null
     */
    public function getHandwritten()
    {
        return $this->handwritten;
    }
    /**
     * Set handwritten value
     * @param bool $handwritten
     * @return \Signicat\DocumentServiceV3_API\StructType\Method
     */
    public function setHandwritten($handwritten = null)
    {
        $this->handwritten = $handwritten;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Method
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
