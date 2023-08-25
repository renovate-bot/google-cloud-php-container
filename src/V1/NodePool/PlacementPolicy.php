<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\NodePool;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PlacementPolicy defines the placement policy used by the node pool.
 *
 * Generated from protobuf message <code>google.container.v1.NodePool.PlacementPolicy</code>
 */
class PlacementPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of placement.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.PlacementPolicy.Type type = 1;</code>
     */
    private $type = 0;
    /**
     * Optional. TPU placement topology for pod slice node pool.
     * https://cloud.google.com/tpu/docs/types-topologies#tpu_topologies
     *
     * Generated from protobuf field <code>string tpu_topology = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $tpu_topology = '';
    /**
     * If set, refers to the name of a custom resource policy supplied by the
     * user. The resource policy must be in the same project and region as the
     * node pool. If not found, InvalidArgument error is returned.
     *
     * Generated from protobuf field <code>string policy_name = 3;</code>
     */
    private $policy_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           The type of placement.
     *     @type string $tpu_topology
     *           Optional. TPU placement topology for pod slice node pool.
     *           https://cloud.google.com/tpu/docs/types-topologies#tpu_topologies
     *     @type string $policy_name
     *           If set, refers to the name of a custom resource policy supplied by the
     *           user. The resource policy must be in the same project and region as the
     *           node pool. If not found, InvalidArgument error is returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of placement.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.PlacementPolicy.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of placement.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.PlacementPolicy.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\NodePool\PlacementPolicy\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional. TPU placement topology for pod slice node pool.
     * https://cloud.google.com/tpu/docs/types-topologies#tpu_topologies
     *
     * Generated from protobuf field <code>string tpu_topology = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTpuTopology()
    {
        return $this->tpu_topology;
    }

    /**
     * Optional. TPU placement topology for pod slice node pool.
     * https://cloud.google.com/tpu/docs/types-topologies#tpu_topologies
     *
     * Generated from protobuf field <code>string tpu_topology = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTpuTopology($var)
    {
        GPBUtil::checkString($var, True);
        $this->tpu_topology = $var;

        return $this;
    }

    /**
     * If set, refers to the name of a custom resource policy supplied by the
     * user. The resource policy must be in the same project and region as the
     * node pool. If not found, InvalidArgument error is returned.
     *
     * Generated from protobuf field <code>string policy_name = 3;</code>
     * @return string
     */
    public function getPolicyName()
    {
        return $this->policy_name;
    }

    /**
     * If set, refers to the name of a custom resource policy supplied by the
     * user. The resource policy must be in the same project and region as the
     * node pool. If not found, InvalidArgument error is returned.
     *
     * Generated from protobuf field <code>string policy_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPolicyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->policy_name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PlacementPolicy::class, \Google\Cloud\Container\V1\NodePool_PlacementPolicy::class);

