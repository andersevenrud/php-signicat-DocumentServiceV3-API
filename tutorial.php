<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://preprod.signicat.com/ws/documentservice-v3?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://preprod.signicat.com/ws/documentservice-v3?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Signicat\DocumentServiceV3_API\ClassMap::get(),
);
/**
 * Samples for Create ServiceType
 */
$create = new \Signicat\DocumentServiceV3_API\ServiceType\Create($options);
/**
 * Sample call for createArtifact operation/method
 */
if ($create->createArtifact(new \Signicat\DocumentServiceV3_API\StructType\Create_artifact_request()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createUserSession operation/method
 */
if ($create->createUserSession(new \Signicat\DocumentServiceV3_API\StructType\Create_usersession_request()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createRequest operation/method
 */
if ($create->createRequest(new \Signicat\DocumentServiceV3_API\StructType\Create_request_request()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \Signicat\DocumentServiceV3_API\ServiceType\Set($options);
/**
 * Sample call for setClientStatus operation/method
 */
if ($set->setClientStatus(new \Signicat\DocumentServiceV3_API\StructType\Set_client_status_request()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Add ServiceType
 */
$add = new \Signicat\DocumentServiceV3_API\ServiceType\Add($options);
/**
 * Sample call for addNotification operation/method
 */
if ($add->addNotification(new \Signicat\DocumentServiceV3_API\StructType\Add_notification_request()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addTask operation/method
 */
if ($add->addTask(new \Signicat\DocumentServiceV3_API\StructType\Add_task_request()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Signicat\DocumentServiceV3_API\ServiceType\Get($options);
/**
 * Sample call for getTaskCount operation/method
 */
if ($get->getTaskCount(new \Signicat\DocumentServiceV3_API\StructType\Get_task_count_request()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPackagingTaskStatus operation/method
 */
if ($get->getPackagingTaskStatus(new \Signicat\DocumentServiceV3_API\StructType\Get_packaging_task_status_request()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTask operation/method
 */
if ($get->getTask(new \Signicat\DocumentServiceV3_API\StructType\Get_task_request()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRequest operation/method
 */
if ($get->getRequest(new \Signicat\DocumentServiceV3_API\StructType\Get_request_request()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getStatus operation/method
 */
if ($get->getStatus(new \Signicat\DocumentServiceV3_API\StructType\Get_status_request()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRequestHistory operation/method
 */
if ($get->getRequestHistory(new \Signicat\DocumentServiceV3_API\StructType\Get_request_history_request()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Signicat\DocumentServiceV3_API\ServiceType\Delete($options);
/**
 * Sample call for deleteRequest operation/method
 */
if ($delete->deleteRequest(new \Signicat\DocumentServiceV3_API\StructType\Delete_request_request()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Disable ServiceType
 */
$disable = new \Signicat\DocumentServiceV3_API\ServiceType\Disable($options);
/**
 * Sample call for disableTask operation/method
 */
if ($disable->disableTask(new \Signicat\DocumentServiceV3_API\StructType\Disable_task_request()) !== false) {
    print_r($disable->getResult());
} else {
    print_r($disable->getLastError());
}
/**
 * Sample call for disableNotification operation/method
 */
if ($disable->disableNotification(new \Signicat\DocumentServiceV3_API\StructType\Disable_notification_request()) !== false) {
    print_r($disable->getResult());
} else {
    print_r($disable->getLastError());
}
/**
 * Samples for Find ServiceType
 */
$find = new \Signicat\DocumentServiceV3_API\ServiceType\Find($options);
/**
 * Sample call for findTasks operation/method
 */
if ($find->findTasks(new \Signicat\DocumentServiceV3_API\StructType\Find_tasks_request()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
