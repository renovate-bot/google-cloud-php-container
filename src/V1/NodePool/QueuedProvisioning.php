<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\NodePool;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueuedProvisioning defines the queued provisioning used by the node pool.
 *
 * Generated from protobuf message <code>google.container.v1.NodePool.QueuedProvisioning</code>
 */
class QueuedProvisioning extends \Google\Protobuf\Internal\Message
{
    /**
     * Denotes that this nodepool is QRM specific, meaning nodes can be only
     * obtained through queuing via the Cluster Autoscaler ProvisioningRequest
     * API.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     */
    protected $enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *           Denotes that this nodepool is QRM specific, meaning nodes can be only
     *           obtained through queuing via the Cluster Autoscaler ProvisioningRequest
     *           API.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Denotes that this nodepool is QRM specific, meaning nodes can be only
     * obtained through queuing via the Cluster Autoscaler ProvisioningRequest
     * API.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Denotes that this nodepool is QRM specific, meaning nodes can be only
     * obtained through queuing via the Cluster Autoscaler ProvisioningRequest
     * API.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

}


