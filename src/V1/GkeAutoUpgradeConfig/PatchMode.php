<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\GkeAutoUpgradeConfig;

use UnexpectedValueException;

/**
 * PatchMode specifies how auto upgrade patch builds should be
 * selected.
 *
 * Protobuf type <code>google.container.v1.GkeAutoUpgradeConfig.PatchMode</code>
 */
class PatchMode
{
    /**
     * PATCH_MODE_UNSPECIFIED defaults to using the upgrade target from the
     * channel's patch upgrade targets as the upgrade target for the
     * version.
     *
     * Generated from protobuf enum <code>PATCH_MODE_UNSPECIFIED = 0;</code>
     */
    const PATCH_MODE_UNSPECIFIED = 0;
    /**
     * ACCELERATED denotes that the latest patch build in the channel should be
     * used as the upgrade target for the version.
     *
     * Generated from protobuf enum <code>ACCELERATED = 1;</code>
     */
    const ACCELERATED = 1;

    private static $valueToName = [
        self::PATCH_MODE_UNSPECIFIED => 'PATCH_MODE_UNSPECIFIED',
        self::ACCELERATED => 'ACCELERATED',
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


