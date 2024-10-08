<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\LoggingVariantConfig;

use UnexpectedValueException;

/**
 * Logging component variants.
 *
 * Protobuf type <code>google.container.v1.LoggingVariantConfig.Variant</code>
 */
class Variant
{
    /**
     * Default value. This shouldn't be used.
     *
     * Generated from protobuf enum <code>VARIANT_UNSPECIFIED = 0;</code>
     */
    const VARIANT_UNSPECIFIED = 0;
    /**
     * default logging variant.
     *
     * Generated from protobuf enum <code>DEFAULT = 1;</code>
     */
    const PBDEFAULT = 1;
    /**
     * maximum logging throughput variant.
     *
     * Generated from protobuf enum <code>MAX_THROUGHPUT = 2;</code>
     */
    const MAX_THROUGHPUT = 2;

    private static $valueToName = [
        self::VARIANT_UNSPECIFIED => 'VARIANT_UNSPECIFIED',
        self::PBDEFAULT => 'DEFAULT',
        self::MAX_THROUGHPUT => 'MAX_THROUGHPUT',
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
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}


