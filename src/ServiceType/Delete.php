<?php

namespace Signicat\DocumentServiceV3_API\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named deleteRequest
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Signicat\DocumentServiceV3_API\StructType\Delete_request_request $delete_request_request
     * @return \Signicat\DocumentServiceV3_API\StructType\Delete_request_response|bool
     */
    public function deleteRequest(\Signicat\DocumentServiceV3_API\StructType\Delete_request_request $delete_request_request)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteRequest($delete_request_request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Signicat\DocumentServiceV3_API\StructType\Delete_request_response
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
