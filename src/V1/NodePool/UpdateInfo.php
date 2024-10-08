<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\NodePool;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * UpdateInfo contains resource (instance groups, etc), status and other
 * intermediate information relevant to a node pool upgrade.
 *
 * Generated from protobuf message <code>google.container.v1.NodePool.UpdateInfo</code>
 */
class UpdateInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Information of a blue-green upgrade.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpdateInfo.BlueGreenInfo blue_green_info = 1;</code>
     */
    protected $blue_green_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Container\V1\NodePool\UpdateInfo\BlueGreenInfo $blue_green_info
     *           Information of a blue-green upgrade.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Information of a blue-green upgrade.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpdateInfo.BlueGreenInfo blue_green_info = 1;</code>
     * @return \Google\Cloud\Container\V1\NodePool\UpdateInfo\BlueGreenInfo|null
     */
    public function getBlueGreenInfo()
    {
        return $this->blue_green_info;
    }

    public function hasBlueGreenInfo()
    {
        return isset($this->blue_green_info);
    }

    public function clearBlueGreenInfo()
    {
        unset($this->blue_green_info);
    }

    /**
     * Information of a blue-green upgrade.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpdateInfo.BlueGreenInfo blue_green_info = 1;</code>
     * @param \Google\Cloud\Container\V1\NodePool\UpdateInfo\BlueGreenInfo $var
     * @return $this
     */
    public function setBlueGreenInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NodePool\UpdateInfo\BlueGreenInfo::class);
        $this->blue_green_info = $var;

        return $this;
    }

}


