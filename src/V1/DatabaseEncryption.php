<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of etcd encryption.
 *
 * Generated from protobuf message <code>google.container.v1.DatabaseEncryption</code>
 */
class DatabaseEncryption extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of CloudKMS key to use for the encryption of secrets in etcd.
     * Ex. projects/my-project/locations/global/keyRings/my-ring/cryptoKeys/my-key
     *
     * Generated from protobuf field <code>string key_name = 1;</code>
     */
    protected $key_name = '';
    /**
     * The desired state of etcd encryption.
     *
     * Generated from protobuf field <code>.google.container.v1.DatabaseEncryption.State state = 2;</code>
     */
    protected $state = 0;
    /**
     * Output only. The current state of etcd encryption.
     *
     * Generated from protobuf field <code>optional .google.container.v1.DatabaseEncryption.CurrentState current_state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $current_state = null;
    /**
     * Output only. Keys in use by the cluster for decrypting
     * existing objects, in addition to the key in `key_name`.
     * Each item is a CloudKMS key resource.
     *
     * Generated from protobuf field <code>repeated string decryption_keys = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $decryption_keys;
    /**
     * Output only. Records errors seen during DatabaseEncryption update
     * operations.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.DatabaseEncryption.OperationError last_operation_errors = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $last_operation_errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key_name
     *           Name of CloudKMS key to use for the encryption of secrets in etcd.
     *           Ex. projects/my-project/locations/global/keyRings/my-ring/cryptoKeys/my-key
     *     @type int $state
     *           The desired state of etcd encryption.
     *     @type int $current_state
     *           Output only. The current state of etcd encryption.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $decryption_keys
     *           Output only. Keys in use by the cluster for decrypting
     *           existing objects, in addition to the key in `key_name`.
     *           Each item is a CloudKMS key resource.
     *     @type array<\Google\Cloud\Container\V1\DatabaseEncryption\OperationError>|\Google\Protobuf\Internal\RepeatedField $last_operation_errors
     *           Output only. Records errors seen during DatabaseEncryption update
     *           operations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of CloudKMS key to use for the encryption of secrets in etcd.
     * Ex. projects/my-project/locations/global/keyRings/my-ring/cryptoKeys/my-key
     *
     * Generated from protobuf field <code>string key_name = 1;</code>
     * @return string
     */
    public function getKeyName()
    {
        return $this->key_name;
    }

    /**
     * Name of CloudKMS key to use for the encryption of secrets in etcd.
     * Ex. projects/my-project/locations/global/keyRings/my-ring/cryptoKeys/my-key
     *
     * Generated from protobuf field <code>string key_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_name = $var;

        return $this;
    }

    /**
     * The desired state of etcd encryption.
     *
     * Generated from protobuf field <code>.google.container.v1.DatabaseEncryption.State state = 2;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The desired state of etcd encryption.
     *
     * Generated from protobuf field <code>.google.container.v1.DatabaseEncryption.State state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\DatabaseEncryption\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The current state of etcd encryption.
     *
     * Generated from protobuf field <code>optional .google.container.v1.DatabaseEncryption.CurrentState current_state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getCurrentState()
    {
        return isset($this->current_state) ? $this->current_state : 0;
    }

    public function hasCurrentState()
    {
        return isset($this->current_state);
    }

    public function clearCurrentState()
    {
        unset($this->current_state);
    }

    /**
     * Output only. The current state of etcd encryption.
     *
     * Generated from protobuf field <code>optional .google.container.v1.DatabaseEncryption.CurrentState current_state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setCurrentState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\DatabaseEncryption\CurrentState::class);
        $this->current_state = $var;

        return $this;
    }

    /**
     * Output only. Keys in use by the cluster for decrypting
     * existing objects, in addition to the key in `key_name`.
     * Each item is a CloudKMS key resource.
     *
     * Generated from protobuf field <code>repeated string decryption_keys = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDecryptionKeys()
    {
        return $this->decryption_keys;
    }

    /**
     * Output only. Keys in use by the cluster for decrypting
     * existing objects, in addition to the key in `key_name`.
     * Each item is a CloudKMS key resource.
     *
     * Generated from protobuf field <code>repeated string decryption_keys = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDecryptionKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->decryption_keys = $arr;

        return $this;
    }

    /**
     * Output only. Records errors seen during DatabaseEncryption update
     * operations.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.DatabaseEncryption.OperationError last_operation_errors = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLastOperationErrors()
    {
        return $this->last_operation_errors;
    }

    /**
     * Output only. Records errors seen during DatabaseEncryption update
     * operations.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.DatabaseEncryption.OperationError last_operation_errors = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Container\V1\DatabaseEncryption\OperationError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLastOperationErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Container\V1\DatabaseEncryption\OperationError::class);
        $this->last_operation_errors = $arr;

        return $this;
    }

}

