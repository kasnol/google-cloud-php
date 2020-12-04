<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/assuredworkloads/v1beta1/assuredworkloads_v1beta1.proto

namespace Google\Cloud\AssuredWorkloads\V1beta1\Workload\ResourceInfo;

use UnexpectedValueException;

/**
 * The type of resource.
 *
 * Protobuf type <code>google.cloud.assuredworkloads.v1beta1.Workload.ResourceInfo.ResourceType</code>
 */
class ResourceType
{
    /**
     * Unknown resource type.
     *
     * Generated from protobuf enum <code>RESOURCE_TYPE_UNSPECIFIED = 0;</code>
     */
    const RESOURCE_TYPE_UNSPECIFIED = 0;
    /**
     * Consumer project.
     *
     * Generated from protobuf enum <code>CONSUMER_PROJECT = 1;</code>
     */
    const CONSUMER_PROJECT = 1;
    /**
     * Consumer project containing encryption keys.
     *
     * Generated from protobuf enum <code>ENCRYPTION_KEYS_PROJECT = 2;</code>
     */
    const ENCRYPTION_KEYS_PROJECT = 2;

    private static $valueToName = [
        self::RESOURCE_TYPE_UNSPECIFIED => 'RESOURCE_TYPE_UNSPECIFIED',
        self::CONSUMER_PROJECT => 'CONSUMER_PROJECT',
        self::ENCRYPTION_KEYS_PROJECT => 'ENCRYPTION_KEYS_PROJECT',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResourceType::class, \Google\Cloud\AssuredWorkloads\V1beta1\Workload_ResourceInfo_ResourceType::class);
