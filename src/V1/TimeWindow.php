<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an arbitrary window of time.
 *
 * Generated from protobuf message <code>google.container.v1.TimeWindow</code>
 */
class TimeWindow extends \Google\Protobuf\Internal\Message
{
    /**
     * The time that the window first starts.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    protected $start_time = null;
    /**
     * The time that the window ends. The end time should take place after the
     * start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    protected $end_time = null;
    protected $options;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Container\V1\MaintenanceExclusionOptions $maintenance_exclusion_options
     *           MaintenanceExclusionOptions provides maintenance exclusion related
     *           options.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The time that the window first starts.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The time that the window ends. The end time should take place after the
     *           start time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * MaintenanceExclusionOptions provides maintenance exclusion related
     * options.
     *
     * Generated from protobuf field <code>.google.container.v1.MaintenanceExclusionOptions maintenance_exclusion_options = 3;</code>
     * @return \Google\Cloud\Container\V1\MaintenanceExclusionOptions|null
     */
    public function getMaintenanceExclusionOptions()
    {
        return $this->readOneof(3);
    }

    public function hasMaintenanceExclusionOptions()
    {
        return $this->hasOneof(3);
    }

    /**
     * MaintenanceExclusionOptions provides maintenance exclusion related
     * options.
     *
     * Generated from protobuf field <code>.google.container.v1.MaintenanceExclusionOptions maintenance_exclusion_options = 3;</code>
     * @param \Google\Cloud\Container\V1\MaintenanceExclusionOptions $var
     * @return $this
     */
    public function setMaintenanceExclusionOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\MaintenanceExclusionOptions::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The time that the window first starts.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * The time that the window first starts.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * The time that the window ends. The end time should take place after the
     * start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * The time that the window ends. The end time should take place after the
     * start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getOptions()
    {
        return $this->whichOneof("options");
    }

}

