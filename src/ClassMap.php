<?php

namespace Signicat\DocumentServiceV3_API;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'add-notification-request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Add_notification_request',
            'add-task-request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Add_task_request',
            'add-task-response' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Add_task_response',
            'create-artifact-request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Create_artifact_request',
            'create-artifact-response' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Create_artifact_response',
            'create-request-request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Create_request_request',
            'create-request-response' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Create_request_response',
            'create-usersession-request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Create_usersession_request',
            'create-usersession-response' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Create_usersession_response',
            'delete-request-request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Delete_request_request',
            'delete-request-response' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Delete_request_response',
            'disable-notification-request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Disable_notification_request',
            'disable-task-request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Disable_task_request',
            'find-tasks-request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Find_tasks_request',
            'find-tasks-response' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Find_tasks_response',
            'get-packaging-task-status-request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Get_packaging_task_status_request',
            'get-packaging-task-status-response' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Get_packaging_task_status_response',
            'get-request-history-request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Get_request_history_request',
            'get-request-history-response' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Get_request_history_response',
            'get-request-request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Get_request_request',
            'get-request-response' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Get_request_response',
            'get-status-request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Get_status_request',
            'get-status-response' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Get_status_response',
            'get-task-count-request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Get_task_count_request',
            'get-task-count-response' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Get_task_count_response',
            'get-task-request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Get_task_request',
            'get-task-response' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Get_task_response',
            'set-client-status-request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Set_client_status_request',
            'notification' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Notification',
            'schedule' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Schedule',
            'wait' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Wait',
            'task-filter' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Task_filter',
            'task-filter-criteria' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Task_filter_criteria',
            'packaging-task-status-info' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Packaging_task_status_info',
            'packaging-document-status' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Packaging_document_status',
            'user-session' => '\\Signicat\\DocumentServiceV3_API\\StructType\\User_session',
            'session-task-info' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Session_task_info',
            'task' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Task',
            'subject' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Subject',
            'attribute' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Attribute',
            'dialog' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Dialog',
            'document-action' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Document_action',
            'document' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Document',
            'form' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Form',
            'form-param' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Form_param',
            'sds-document' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Sds_document',
            'provided-document' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Provided_document',
            'packaging-result-document' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Packaging_result_document',
            'archive-document' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Archive_document',
            'result-document' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Result_document',
            'upload-document' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Upload_document',
            'authentication' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Authentication',
            'signature' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Signature',
            'method' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Method',
            'authentication-based-signature' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Authentication_based_signature',
            'request' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Request',
            'sender' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Sender',
            'packaging-task' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Packaging_task',
            'packaging-task-document' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Packaging_task_document',
            'task-info' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Task_info',
            'task-status-info' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Task_status_info',
            'document-status' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Document_status',
            'event' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Event',
            'document-data' => '\\Signicat\\DocumentServiceV3_API\\StructType\\Document_data',
        );
    }
}
