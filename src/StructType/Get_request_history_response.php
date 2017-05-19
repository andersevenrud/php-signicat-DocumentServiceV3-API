<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for get-request-history-response StructType
 * @subpackage Structs
 */
class Get_request_history_response extends AbstractStructBase
{
    /**
     * The event
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Signicat\DocumentServiceV3_API\StructType\Event[]
     */
    public $event;
    /**
     * Constructor method for get-request-history-response
     * @uses Get_request_history_response::setEvent()
     * @param \Signicat\DocumentServiceV3_API\StructType\Event[] $event
     */
    public function __construct(array $event = array())
    {
        $this
            ->setEvent($event);
    }
    /**
     * Get event value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Signicat\DocumentServiceV3_API\StructType\Event[]|null
     */
    public function getEvent()
    {
        return isset($this->event) ? $this->event : null;
    }
    /**
     * Set event value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Event[] $event
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_request_history_response
     */
    public function setEvent(array $event = array())
    {
        foreach ($event as $get_request_history_responseEventItem) {
            // validation for constraint: itemType
            if (!$get_request_history_responseEventItem instanceof \Signicat\DocumentServiceV3_API\StructType\Event) {
                throw new \InvalidArgumentException(sprintf('The event property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Event, "%s" given', is_object($get_request_history_responseEventItem) ? get_class($get_request_history_responseEventItem) : gettype($get_request_history_responseEventItem)), __LINE__);
            }
        }
        if (is_null($event) || (is_array($event) && empty($event))) {
            unset($this->event);
        } else {
            $this->event = $event;
        }
        return $this;
    }
    /**
     * Add item to event value
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Event $item
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_request_history_response
     */
    public function addToEvent(\Signicat\DocumentServiceV3_API\StructType\Event $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Event) {
            throw new \InvalidArgumentException(sprintf('The event property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Event, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->event[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_request_history_response
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
