<?php

namespace Signicat\DocumentServiceV3_API\EnumType;

/**
 * This class stands for task-filter-field EnumType
 * @subpackage Enumerations
 */
class Task_filter_field
{
    /**
     * Constant for value 'id'
     * @return string 'id'
     */
    const VALUE_ID = 'id';
    /**
     * Constant for value 'request-id'
     * @return string 'request-id'
     */
    const VALUE_REQUEST_ID = 'request-id';
    /**
     * Constant for value 'task-id'
     * @return string 'task-id'
     */
    const VALUE_TASK_ID = 'task-id';
    /**
     * Constant for value 'document-id'
     * @return string 'document-id'
     */
    const VALUE_DOCUMENT_ID = 'document-id';
    /**
     * Constant for value 'archive-id'
     * @return string 'archive-id'
     */
    const VALUE_ARCHIVE_ID = 'archive-id';
    /**
     * Constant for value 'account'
     * @return string 'account'
     */
    const VALUE_ACCOUNT = 'account';
    /**
     * Constant for value 'language'
     * @return string 'language'
     */
    const VALUE_LANGUAGE = 'language';
    /**
     * Constant for value 'task-state'
     * @return string 'task-state'
     */
    const VALUE_TASK_STATE = 'task-state';
    /**
     * Constant for value 'document-description'
     * @return string 'document-description'
     */
    const VALUE_DOCUMENT_DESCRIPTION = 'document-description';
    /**
     * Constant for value 'mime-type'
     * @return string 'mime-type'
     */
    const VALUE_MIME_TYPE = 'mime-type';
    /**
     * Constant for value 'subject-first-name'
     * @return string 'subject-first-name'
     */
    const VALUE_SUBJECT_FIRST_NAME = 'subject-first-name';
    /**
     * Constant for value 'subject-last-name'
     * @return string 'subject-last-name'
     */
    const VALUE_SUBJECT_LAST_NAME = 'subject-last-name';
    /**
     * Constant for value 'subject-email'
     * @return string 'subject-email'
     */
    const VALUE_SUBJECT_EMAIL = 'subject-email';
    /**
     * Constant for value 'subject-national-id'
     * @return string 'subject-national-id'
     */
    const VALUE_SUBJECT_NATIONAL_ID = 'subject-national-id';
    /**
     * Constant for value 'subject-mobile'
     * @return string 'subject-mobile'
     */
    const VALUE_SUBJECT_MOBILE = 'subject-mobile';
    /**
     * Constant for value 'authentication-type'
     * @return string 'authentication-type'
     */
    const VALUE_AUTHENTICATION_TYPE = 'authentication-type';
    /**
     * Constant for value 'created'
     * @return string 'created'
     */
    const VALUE_CREATED = 'created';
    /**
     * Constant for value 'last-updated'
     * @return string 'last-updated'
     */
    const VALUE_LAST_UPDATED = 'last-updated';
    /**
     * Constant for value 'signer'
     * @return string 'signer'
     */
    const VALUE_SIGNER = 'signer';
    /**
     * Constant for value 'sender-unique-id'
     * @return string 'sender-unique-id'
     */
    const VALUE_SENDER_UNIQUE_ID = 'sender-unique-id';
    /**
     * Constant for value 'client-reference'
     * @return string 'client-reference'
     */
    const VALUE_CLIENT_REFERENCE = 'client-reference';
    /**
     * Constant for value 'client-status'
     * @return string 'client-status'
     */
    const VALUE_CLIENT_STATUS = 'client-status';
    /**
     * Constant for value 'days-to-live'
     * @return string 'days-to-live'
     */
    const VALUE_DAYS_TO_LIVE = 'days-to-live';
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
     * @uses self::VALUE_ID
     * @uses self::VALUE_REQUEST_ID
     * @uses self::VALUE_TASK_ID
     * @uses self::VALUE_DOCUMENT_ID
     * @uses self::VALUE_ARCHIVE_ID
     * @uses self::VALUE_ACCOUNT
     * @uses self::VALUE_LANGUAGE
     * @uses self::VALUE_TASK_STATE
     * @uses self::VALUE_DOCUMENT_DESCRIPTION
     * @uses self::VALUE_MIME_TYPE
     * @uses self::VALUE_SUBJECT_FIRST_NAME
     * @uses self::VALUE_SUBJECT_LAST_NAME
     * @uses self::VALUE_SUBJECT_EMAIL
     * @uses self::VALUE_SUBJECT_NATIONAL_ID
     * @uses self::VALUE_SUBJECT_MOBILE
     * @uses self::VALUE_AUTHENTICATION_TYPE
     * @uses self::VALUE_CREATED
     * @uses self::VALUE_LAST_UPDATED
     * @uses self::VALUE_SIGNER
     * @uses self::VALUE_SENDER_UNIQUE_ID
     * @uses self::VALUE_CLIENT_REFERENCE
     * @uses self::VALUE_CLIENT_STATUS
     * @uses self::VALUE_DAYS_TO_LIVE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ID,
            self::VALUE_REQUEST_ID,
            self::VALUE_TASK_ID,
            self::VALUE_DOCUMENT_ID,
            self::VALUE_ARCHIVE_ID,
            self::VALUE_ACCOUNT,
            self::VALUE_LANGUAGE,
            self::VALUE_TASK_STATE,
            self::VALUE_DOCUMENT_DESCRIPTION,
            self::VALUE_MIME_TYPE,
            self::VALUE_SUBJECT_FIRST_NAME,
            self::VALUE_SUBJECT_LAST_NAME,
            self::VALUE_SUBJECT_EMAIL,
            self::VALUE_SUBJECT_NATIONAL_ID,
            self::VALUE_SUBJECT_MOBILE,
            self::VALUE_AUTHENTICATION_TYPE,
            self::VALUE_CREATED,
            self::VALUE_LAST_UPDATED,
            self::VALUE_SIGNER,
            self::VALUE_SENDER_UNIQUE_ID,
            self::VALUE_CLIENT_REFERENCE,
            self::VALUE_CLIENT_STATUS,
            self::VALUE_DAYS_TO_LIVE,
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
