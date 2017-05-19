<?php

namespace Signicat\DocumentServiceV3_API\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named addNotification
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Signicat\DocumentServiceV3_API\StructType\Add_notification_request $request
     * @return void|bool
     */
    public function addNotification(\Signicat\DocumentServiceV3_API\StructType\Add_notification_request $request)
    {
        try {
            $this->setResult(self::getSoapClient()->addNotification($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Signicat\DocumentServiceV3_API\StructType\Add_task_request $request
     * @return \Signicat\DocumentServiceV3_API\StructType\Add_task_response|bool
     */
    public function addTask(\Signicat\DocumentServiceV3_API\StructType\Add_task_request $request)
    {
        try {
            $this->setResult(self::getSoapClient()->addTask($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return void|\Signicat\DocumentServiceV3_API\StructType\Add_task_response
     */
    public function getResult()
    {
        return parent::getResult();
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
