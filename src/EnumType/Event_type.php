<?php

namespace Signicat\DocumentServiceV3_API\EnumType;

/**
 * This class stands for event-type EnumType
 * @subpackage Enumerations
 */
class Event_type
{
    /**
     * Constant for value 'request-created'
     * @return string 'request-created'
     */
    const VALUE_REQUEST_CREATED = 'request-created';
    /**
     * Constant for value 'notification-sent'
     * @return string 'notification-sent'
     */
    const VALUE_NOTIFICATION_SENT = 'notification-sent';
    /**
     * Constant for value 'task-started'
     * @return string 'task-started'
     */
    const VALUE_TASK_STARTED = 'task-started';
    /**
     * Constant for value 'task-rejected'
     * @return string 'task-rejected'
     */
    const VALUE_TASK_REJECTED = 'task-rejected';
    /**
     * Constant for value 'task-completed'
     * @return string 'task-completed'
     */
    const VALUE_TASK_COMPLETED = 'task-completed';
    /**
     * Constant for value 'error'
     * @return string 'error'
     */
    const VALUE_ERROR = 'error';
    /**
     * Constant for value 'document-uploaded'
     * @return string 'document-uploaded'
     */
    const VALUE_DOCUMENT_UPLOADED = 'document-uploaded';
    /**
     * Constant for value 'document-signed'
     * @return string 'document-signed'
     */
    const VALUE_DOCUMENT_SIGNED = 'document-signed';
    /**
     * Constant for value 'document-viewed'
     * @return string 'document-viewed'
     */
    const VALUE_DOCUMENT_VIEWED = 'document-viewed';
    /**
     * Constant for value 'document-sign-cancelled'
     * @return string 'document-sign-cancelled'
     */
    const VALUE_DOCUMENT_SIGN_CANCELLED = 'document-sign-cancelled';
    /**
     * Constant for value 'document-deleted'
     * @return string 'document-deleted'
     */
    const VALUE_DOCUMENT_DELETED = 'document-deleted';
    /**
     * Constant for value 'user-authenticated'
     * @return string 'user-authenticated'
     */
    const VALUE_USER_AUTHENTICATED = 'user-authenticated';
    /**
     * Constant for value 'user-authentication-cancelled'
     * @return string 'user-authentication-cancelled'
     */
    const VALUE_USER_AUTHENTICATION_CANCELLED = 'user-authentication-cancelled';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_REQUEST_CREATED
     * @uses self::VALUE_NOTIFICATION_SENT
     * @uses self::VALUE_TASK_STARTED
     * @uses self::VALUE_TASK_REJECTED
     * @uses self::VALUE_TASK_COMPLETED
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_DOCUMENT_UPLOADED
     * @uses self::VALUE_DOCUMENT_SIGNED
     * @uses self::VALUE_DOCUMENT_VIEWED
     * @uses self::VALUE_DOCUMENT_SIGN_CANCELLED
     * @uses self::VALUE_DOCUMENT_DELETED
     * @uses self::VALUE_USER_AUTHENTICATED
     * @uses self::VALUE_USER_AUTHENTICATION_CANCELLED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REQUEST_CREATED,
            self::VALUE_NOTIFICATION_SENT,
            self::VALUE_TASK_STARTED,
            self::VALUE_TASK_REJECTED,
            self::VALUE_TASK_COMPLETED,
            self::VALUE_ERROR,
            self::VALUE_DOCUMENT_UPLOADED,
            self::VALUE_DOCUMENT_SIGNED,
            self::VALUE_DOCUMENT_VIEWED,
            self::VALUE_DOCUMENT_SIGN_CANCELLED,
            self::VALUE_DOCUMENT_DELETED,
            self::VALUE_USER_AUTHENTICATED,
            self::VALUE_USER_AUTHENTICATION_CANCELLED,
        );
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
