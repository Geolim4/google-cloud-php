<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/datascans.proto

namespace Google\Cloud\Dataplex\V1;

use UnexpectedValueException;

/**
 * The type of DataScan.
 *
 * Protobuf type <code>google.cloud.dataplex.v1.DataScanType</code>
 */
class DataScanType
{
    /**
     * The DataScan Type is unspecified.
     *
     * Generated from protobuf enum <code>DATA_SCAN_TYPE_UNSPECIFIED = 0;</code>
     */
    const DATA_SCAN_TYPE_UNSPECIFIED = 0;
    /**
     * Data Quality Scan.
     *
     * Generated from protobuf enum <code>DATA_QUALITY = 1;</code>
     */
    const DATA_QUALITY = 1;
    /**
     * Data Profile Scan.
     *
     * Generated from protobuf enum <code>DATA_PROFILE = 2;</code>
     */
    const DATA_PROFILE = 2;

    private static $valueToName = [
        self::DATA_SCAN_TYPE_UNSPECIFIED => 'DATA_SCAN_TYPE_UNSPECIFIED',
        self::DATA_QUALITY => 'DATA_QUALITY',
        self::DATA_PROFILE => 'DATA_PROFILE',
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
