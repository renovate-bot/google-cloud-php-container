<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\DatabaseEncryption;

use UnexpectedValueException;

/**
 * Current State of etcd encryption.
 *
 * Protobuf type <code>google.container.v1.DatabaseEncryption.CurrentState</code>
 */
class CurrentState
{
    /**
     * Should never be set
     *
     * Generated from protobuf enum <code>CURRENT_STATE_UNSPECIFIED = 0;</code>
     */
    const CURRENT_STATE_UNSPECIFIED = 0;
    /**
     * Secrets in etcd are encrypted.
     *
     * Generated from protobuf enum <code>CURRENT_STATE_ENCRYPTED = 7;</code>
     */
    const CURRENT_STATE_ENCRYPTED = 7;
    /**
     * Secrets in etcd are stored in plain text (at etcd level) - this is
     * unrelated to Compute Engine level full disk encryption.
     *
     * Generated from protobuf enum <code>CURRENT_STATE_DECRYPTED = 2;</code>
     */
    const CURRENT_STATE_DECRYPTED = 2;
    /**
     * Encryption (or re-encryption with a different CloudKMS key)
     * of Secrets is in progress.
     *
     * Generated from protobuf enum <code>CURRENT_STATE_ENCRYPTION_PENDING = 3;</code>
     */
    const CURRENT_STATE_ENCRYPTION_PENDING = 3;
    /**
     * Encryption (or re-encryption with a different CloudKMS key) of Secrets in
     * etcd encountered an error.
     *
     * Generated from protobuf enum <code>CURRENT_STATE_ENCRYPTION_ERROR = 4;</code>
     */
    const CURRENT_STATE_ENCRYPTION_ERROR = 4;
    /**
     * De-crypting Secrets to plain text in etcd is in progress.
     *
     * Generated from protobuf enum <code>CURRENT_STATE_DECRYPTION_PENDING = 5;</code>
     */
    const CURRENT_STATE_DECRYPTION_PENDING = 5;
    /**
     * De-crypting Secrets to plain text in etcd encountered an error.
     *
     * Generated from protobuf enum <code>CURRENT_STATE_DECRYPTION_ERROR = 6;</code>
     */
    const CURRENT_STATE_DECRYPTION_ERROR = 6;

    private static $valueToName = [
        self::CURRENT_STATE_UNSPECIFIED => 'CURRENT_STATE_UNSPECIFIED',
        self::CURRENT_STATE_ENCRYPTED => 'CURRENT_STATE_ENCRYPTED',
        self::CURRENT_STATE_DECRYPTED => 'CURRENT_STATE_DECRYPTED',
        self::CURRENT_STATE_ENCRYPTION_PENDING => 'CURRENT_STATE_ENCRYPTION_PENDING',
        self::CURRENT_STATE_ENCRYPTION_ERROR => 'CURRENT_STATE_ENCRYPTION_ERROR',
        self::CURRENT_STATE_DECRYPTION_PENDING => 'CURRENT_STATE_DECRYPTION_PENDING',
        self::CURRENT_STATE_DECRYPTION_ERROR => 'CURRENT_STATE_DECRYPTION_ERROR',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


