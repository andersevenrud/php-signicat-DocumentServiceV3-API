<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for schedule StructType
 * @subpackage Structs
 */
class Schedule extends AbstractStructBase
{
    /**
     * The state_is
     */
    public $state_is;
    /**
     * The wait_until
     */
    public $wait_until;
    /**
     * The wait
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Signicat\DocumentServiceV3_API\StructType\Wait
     */
    public $wait;
    /**
     * The days_of_week
     */
    public $days_of_week;
    /**
     * The time_of_day
     */
    public $time_of_day;
    /**
     * The timezone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $timezone;
    /**
     * Constructor method for schedule
     * @uses Schedule::setState_is()
     * @uses Schedule::setWait_until()
     * @uses Schedule::setWait()
     * @uses Schedule::setDays_of_week()
     * @uses Schedule::setTime_of_day()
     * @uses Schedule::setTimezone()
     * @param string $state_is
     * @param string $wait_until
     * @param \Signicat\DocumentServiceV3_API\StructType\Wait $wait
     * @param string $days_of_week
     * @param string $time_of_day
     * @param string $timezone
     */
    public function __construct($state_is = null, $wait_until = null, \Signicat\DocumentServiceV3_API\StructType\Wait $wait = null, $days_of_week = null, $time_of_day = null, $timezone = null)
    {
        $this
            ->setState_is($state_is)
            ->setWait_until($wait_until)
            ->setWait($wait)
            ->setDays_of_week($days_of_week)
            ->setTime_of_day($time_of_day)
            ->setTimezone($timezone);
    }
    /**
     * Get state_is value
     * @return state_is
     */
    public function getState_is()
    {
        return $this->{'state-is'};
    }
    /**
     * Set state_is value
     * @param state_is $state_is
     * @return \Signicat\DocumentServiceV3_API\StructType\Schedule
     */
    public function setState_is($state_is = null)
    {
        // validation for constraint: enumeration
        if (!\Signicat\DocumentServiceV3_API\EnumType\Task_status::valueIsValid($state_is)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $state_is, implode(', ', \Signicat\DocumentServiceV3_API\EnumType\Task_status::getValidValues())), __LINE__);
        }
        $this->state_is = $this->{'state-is'} = $state_is;
        return $this;
    }
    /**
     * Get wait_until value
     * @return wait_until
     */
    public function getWait_until()
    {
        return $this->{'wait-until'};
    }
    /**
     * Set wait_until value
     * @param wait_until $wait_until
     * @return \Signicat\DocumentServiceV3_API\StructType\Schedule
     */
    public function setWait_until($wait_until = null)
    {
        // validation for constraint: string
        if (!is_null($wait_until) && !is_string($wait_until)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wait_until)), __LINE__);
        }
        $this->wait_until = $this->{'wait-until'} = $wait_until;
        return $this;
    }
    /**
     * Get wait value
     * @return \Signicat\DocumentServiceV3_API\StructType\Wait|null
     */
    public function getWait()
    {
        return $this->wait;
    }
    /**
     * Set wait value
     * @param \Signicat\DocumentServiceV3_API\StructType\Wait $wait
     * @return \Signicat\DocumentServiceV3_API\StructType\Schedule
     */
    public function setWait(\Signicat\DocumentServiceV3_API\StructType\Wait $wait = null)
    {
        $this->wait = $wait;
        return $this;
    }
    /**
     * Get days_of_week value
     * @return days_of_week
     */
    public function getDays_of_week()
    {
        return $this->{'days-of-week'};
    }
    /**
     * Set days_of_week value
     * @param days_of_week $days_of_week
     * @return \Signicat\DocumentServiceV3_API\StructType\Schedule
     */
    public function setDays_of_week($days_of_week = null)
    {
        // validation for constraint: string
        if (!is_null($days_of_week) && !is_string($days_of_week)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($days_of_week)), __LINE__);
        }
        $this->days_of_week = $this->{'days-of-week'} = $days_of_week;
        return $this;
    }
    /**
     * Get time_of_day value
     * @return time_of_day
     */
    public function getTime_of_day()
    {
        return $this->{'time-of-day'};
    }
    /**
     * Set time_of_day value
     * @param time_of_day $time_of_day
     * @return \Signicat\DocumentServiceV3_API\StructType\Schedule
     */
    public function setTime_of_day($time_of_day = null)
    {
        // validation for constraint: string
        if (!is_null($time_of_day) && !is_string($time_of_day)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($time_of_day)), __LINE__);
        }
        $this->time_of_day = $this->{'time-of-day'} = $time_of_day;
        return $this;
    }
    /**
     * Get timezone value
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->timezone;
    }
    /**
     * Set timezone value
     * @param string $timezone
     * @return \Signicat\DocumentServiceV3_API\StructType\Schedule
     */
    public function setTimezone($timezone = null)
    {
        // validation for constraint: string
        if (!is_null($timezone) && !is_string($timezone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timezone)), __LINE__);
        }
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Schedule
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
