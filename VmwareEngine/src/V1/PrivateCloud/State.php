<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace Google\Cloud\VmwareEngine\V1\PrivateCloud;

use UnexpectedValueException;

/**
 * Enum State defines possible states of private clouds.
 *
 * Protobuf type <code>google.cloud.vmwareengine.v1.PrivateCloud.State</code>
 */
class State
{
    /**
     * The default value. This value should never be used.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The private cloud is ready.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * The private cloud is being created.
     *
     * Generated from protobuf enum <code>CREATING = 2;</code>
     */
    const CREATING = 2;
    /**
     * The private cloud is being updated.
     *
     * Generated from protobuf enum <code>UPDATING = 3;</code>
     */
    const UPDATING = 3;
    /**
     * The private cloud is in failed state.
     *
     * Generated from protobuf enum <code>FAILED = 5;</code>
     */
    const FAILED = 5;
    /**
     * The private cloud is scheduled for deletion. The deletion process can be
     * cancelled by using the corresponding undelete method.
     *
     * Generated from protobuf enum <code>DELETED = 6;</code>
     */
    const DELETED = 6;
    /**
     * The private cloud is irreversibly deleted and is being removed from the
     * system.
     *
     * Generated from protobuf enum <code>PURGING = 7;</code>
     */
    const PURGING = 7;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::CREATING => 'CREATING',
        self::UPDATING => 'UPDATING',
        self::FAILED => 'FAILED',
        self::DELETED => 'DELETED',
        self::PURGING => 'PURGING',
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

