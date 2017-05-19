<?php

namespace Signicat\DocumentServiceV3_API\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getTaskCount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Signicat\DocumentServiceV3_API\StructType\Get_task_count_request $request
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_task_count_response|bool
     */
    public function getTaskCount(\Signicat\DocumentServiceV3_API\StructType\Get_task_count_request $request)
    {
        try {
            $this->setResult(self::getSoapClient()->getTaskCount($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPackagingTaskStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Signicat\DocumentServiceV3_API\StructType\Get_packaging_task_status_request $request
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_packaging_task_status_response|bool
     */
    public function getPackagingTaskStatus(\Signicat\DocumentServiceV3_API\StructType\Get_packaging_task_status_request $request)
    {
        try {
            $this->setResult(self::getSoapClient()->getPackagingTaskStatus($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Signicat\DocumentServiceV3_API\StructType\Get_task_request $get_task_request
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_task_response|bool
     */
    public function getTask(\Signicat\DocumentServiceV3_API\StructType\Get_task_request $get_task_request)
    {
        try {
            $this->setResult(self::getSoapClient()->getTask($get_task_request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRequest
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Signicat\DocumentServiceV3_API\StructType\Get_request_request $get_request_request
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_request_response|bool
     */
    public function getRequest(\Signicat\DocumentServiceV3_API\StructType\Get_request_request $get_request_request)
    {
        try {
            $this->setResult(self::getSoapClient()->getRequest($get_request_request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Signicat\DocumentServiceV3_API\StructType\Get_status_request $request
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_status_response|bool
     */
    public function getStatus(\Signicat\DocumentServiceV3_API\StructType\Get_status_request $request)
    {
        try {
            $this->setResult(self::getSoapClient()->getStatus($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRequestHistory
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Signicat\DocumentServiceV3_API\StructType\Get_request_history_request $request
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_request_history_response|bool
     */
    public function getRequestHistory(\Signicat\DocumentServiceV3_API\StructType\Get_request_history_request $request)
    {
        try {
            $this->setResult(self::getSoapClient()->getRequestHistory($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Signicat\DocumentServiceV3_API\StructType\Get_packaging_task_status_response|\Signicat\DocumentServiceV3_API\StructType\Get_request_history_response|\Signicat\DocumentServiceV3_API\StructType\Get_request_response|\Signicat\DocumentServiceV3_API\StructType\Get_status_response|\Signicat\DocumentServiceV3_API\StructType\Get_task_count_response|\Signicat\DocumentServiceV3_API\StructType\Get_task_response
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
