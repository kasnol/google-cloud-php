<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/workflows/executions/v1/executions.proto

namespace Google\Cloud\Workflows\Executions\V1\Execution;

use UnexpectedValueException;

/**
 * Describes the level of platform logging to apply to calls and call
 * responses during workflow executions.
 *
 * Protobuf type <code>google.cloud.workflows.executions.v1.Execution.CallLogLevel</code>
 */
class CallLogLevel
{
    /**
     * No call logging specified.
     *
     * Generated from protobuf enum <code>CALL_LOG_LEVEL_UNSPECIFIED = 0;</code>
     */
    const CALL_LOG_LEVEL_UNSPECIFIED = 0;
    /**
     * Log all call steps within workflows, all call returns, and all exceptions
     * raised.
     *
     * Generated from protobuf enum <code>LOG_ALL_CALLS = 1;</code>
     */
    const LOG_ALL_CALLS = 1;
    /**
     * Log only exceptions that are raised from call steps within workflows.
     *
     * Generated from protobuf enum <code>LOG_ERRORS_ONLY = 2;</code>
     */
    const LOG_ERRORS_ONLY = 2;

    private static $valueToName = [
        self::CALL_LOG_LEVEL_UNSPECIFIED => 'CALL_LOG_LEVEL_UNSPECIFIED',
        self::LOG_ALL_CALLS => 'LOG_ALL_CALLS',
        self::LOG_ERRORS_ONLY => 'LOG_ERRORS_ONLY',
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
class_alias(CallLogLevel::class, \Google\Cloud\Workflows\Executions\V1\Execution_CallLogLevel::class);
