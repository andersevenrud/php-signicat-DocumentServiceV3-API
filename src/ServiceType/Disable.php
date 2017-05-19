<?php

namespace Signicat\DocumentServiceV3_API\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Disable ServiceType
 * @subpackage Services
 */
class Disable extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named disableTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Signicat\DocumentServiceV3_API\StructType\Disable_task_request $request
     * @return void|bool
     */
    public function disableTask(\Signicat\DocumentServiceV3_API\StructType\Disable_task_request $request)
    {
        try {
            $this->setResult(self::getSoapClient()->disableTask($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named disableNotification
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Signicat\DocumentServiceV3_API\StructType\Disable_notification_request $request
     * @return void|bool
     */
    public function disableNotification(\Signicat\DocumentServiceV3_API\StructType\Disable_notification_request $request)
    {
        try {
            $this->setResult(self::getSoapClient()->disableNotification($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return void
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
