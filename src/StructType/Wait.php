<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wait StructType
 * @subpackage Structs
 */
class Wait extends AbstractStructBase
{
    /**
     * The days
     * @var int
     */
    public $days;
    /**
     * The hours
     * @var int
     */
    public $hours;
    /**
     * The minutes
     * @var int
     */
    public $minutes;
    /**
     * Constructor method for wait
     * @uses Wait::setDays()
     * @uses Wait::setHours()
     * @uses Wait::setMinutes()
     * @param int $days
     * @param int $hours
     * @param int $minutes
     */
    public function __construct($days = null, $hours = null, $minutes = null)
    {
        $this
            ->setDays($days)
            ->setHours($hours)
            ->setMinutes($minutes);
    }
    /**
     * Get days value
     * @return int|null
     */
    public function getDays()
    {
        return $this->days;
    }
    /**
     * Set days value
     * @param int $days
     * @return \Signicat\DocumentServiceV3_API\StructType\Wait
     */
    public function setDays($days = null)
    {
        // validation for constraint: int
        if (!is_null($days) && !is_numeric($days)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($days)), __LINE__);
        }
        $this->days = $days;
        return $this;
    }
    /**
     * Get hours value
     * @return int|null
     */
    public function getHours()
    {
        return $this->hours;
    }
    /**
     * Set hours value
     * @param int $hours
     * @return \Signicat\DocumentServiceV3_API\StructType\Wait
     */
    public function setHours($hours = null)
    {
        // validation for constraint: int
        if (!is_null($hours) && !is_numeric($hours)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($hours)), __LINE__);
        }
        $this->hours = $hours;
        return $this;
    }
    /**
     * Get minutes value
     * @return int|null
     */
    public function getMinutes()
    {
        return $this->minutes;
    }
    /**
     * Set minutes value
     * @param int $minutes
     * @return \Signicat\DocumentServiceV3_API\StructType\Wait
     */
    public function setMinutes($minutes = null)
    {
        // validation for constraint: int
        if (!is_null($minutes) && !is_numeric($minutes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minutes)), __LINE__);
        }
        $this->minutes = $minutes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Wait
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
