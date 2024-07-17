<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AdditionalPodNetworkConfig is the configuration for additional pod networks
 * within the NodeNetworkConfig message
 *
 * Generated from protobuf message <code>google.container.v1.AdditionalPodNetworkConfig</code>
 */
class AdditionalPodNetworkConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the subnetwork where the additional pod network belongs.
     *
     * Generated from protobuf field <code>string subnetwork = 1;</code>
     */
    private $subnetwork = '';
    /**
     * The name of the secondary range on the subnet which provides IP address for
     * this pod range.
     *
     * Generated from protobuf field <code>string secondary_pod_range = 2;</code>
     */
    private $secondary_pod_range = '';
    /**
     * The maximum number of pods per node which use this pod network.
     *
     * Generated from protobuf field <code>optional .google.container.v1.MaxPodsConstraint max_pods_per_node = 3;</code>
     */
    private $max_pods_per_node = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subnetwork
     *           Name of the subnetwork where the additional pod network belongs.
     *     @type string $secondary_pod_range
     *           The name of the secondary range on the subnet which provides IP address for
     *           this pod range.
     *     @type \Google\Cloud\Container\V1\MaxPodsConstraint $max_pods_per_node
     *           The maximum number of pods per node which use this pod network.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the subnetwork where the additional pod network belongs.
     *
     * Generated from protobuf field <code>string subnetwork = 1;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return $this->subnetwork;
    }

    /**
     * Name of the subnetwork where the additional pod network belongs.
     *
     * Generated from protobuf field <code>string subnetwork = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

    /**
     * The name of the secondary range on the subnet which provides IP address for
     * this pod range.
     *
     * Generated from protobuf field <code>string secondary_pod_range = 2;</code>
     * @return string
     */
    public function getSecondaryPodRange()
    {
        return $this->secondary_pod_range;
    }

    /**
     * The name of the secondary range on the subnet which provides IP address for
     * this pod range.
     *
     * Generated from protobuf field <code>string secondary_pod_range = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSecondaryPodRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->secondary_pod_range = $var;

        return $this;
    }

    /**
     * The maximum number of pods per node which use this pod network.
     *
     * Generated from protobuf field <code>optional .google.container.v1.MaxPodsConstraint max_pods_per_node = 3;</code>
     * @return \Google\Cloud\Container\V1\MaxPodsConstraint|null
     */
    public function getMaxPodsPerNode()
    {
        return $this->max_pods_per_node;
    }

    public function hasMaxPodsPerNode()
    {
        return isset($this->max_pods_per_node);
    }

    public function clearMaxPodsPerNode()
    {
        unset($this->max_pods_per_node);
    }

    /**
     * The maximum number of pods per node which use this pod network.
     *
     * Generated from protobuf field <code>optional .google.container.v1.MaxPodsConstraint max_pods_per_node = 3;</code>
     * @param \Google\Cloud\Container\V1\MaxPodsConstraint $var
     * @return $this
     */
    public function setMaxPodsPerNode($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\MaxPodsConstraint::class);
        $this->max_pods_per_node = $var;

        return $this;
    }

}

