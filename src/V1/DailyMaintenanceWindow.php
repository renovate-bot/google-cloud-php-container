<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Time window specified for daily maintenance operations.
 *
 * Generated from protobuf message <code>google.container.v1.DailyMaintenanceWindow</code>
 */
class DailyMaintenanceWindow extends \Google\Protobuf\Internal\Message
{
    /**
     * Time within the maintenance window to start the maintenance operations.
     * Time format should be in [RFC3339](https://www.ietf.org/rfc/rfc3339.txt)
     * format "HH:MM", where HH : [00-23] and MM : [00-59] GMT.
     *
     * Generated from protobuf field <code>string start_time = 2;</code>
     */
    private $start_time = '';
    /**
     * Output only. Duration of the time window, automatically chosen to be
     * smallest possible in the given scenario.
     * Duration will be in [RFC3339](https://www.ietf.org/rfc/rfc3339.txt)
     * format "PTnHnMnS".
     *
     * Generated from protobuf field <code>string duration = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $duration = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $start_time
     *           Time within the maintenance window to start the maintenance operations.
     *           Time format should be in [RFC3339](https://www.ietf.org/rfc/rfc3339.txt)
     *           format "HH:MM", where HH : [00-23] and MM : [00-59] GMT.
     *     @type string $duration
     *           Output only. Duration of the time window, automatically chosen to be
     *           smallest possible in the given scenario.
     *           Duration will be in [RFC3339](https://www.ietf.org/rfc/rfc3339.txt)
     *           format "PTnHnMnS".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Time within the maintenance window to start the maintenance operations.
     * Time format should be in [RFC3339](https://www.ietf.org/rfc/rfc3339.txt)
     * format "HH:MM", where HH : [00-23] and MM : [00-59] GMT.
     *
     * Generated from protobuf field <code>string start_time = 2;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Time within the maintenance window to start the maintenance operations.
     * Time format should be in [RFC3339](https://www.ietf.org/rfc/rfc3339.txt)
     * format "HH:MM", where HH : [00-23] and MM : [00-59] GMT.
     *
     * Generated from protobuf field <code>string start_time = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. Duration of the time window, automatically chosen to be
     * smallest possible in the given scenario.
     * Duration will be in [RFC3339](https://www.ietf.org/rfc/rfc3339.txt)
     * format "PTnHnMnS".
     *
     * Generated from protobuf field <code>string duration = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Output only. Duration of the time window, automatically chosen to be
     * smallest possible in the given scenario.
     * Duration will be in [RFC3339](https://www.ietf.org/rfc/rfc3339.txt)
     * format "PTnHnMnS".
     *
     * Generated from protobuf field <code>string duration = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkString($var, True);
        $this->duration = $var;

        return $this;
    }

}

