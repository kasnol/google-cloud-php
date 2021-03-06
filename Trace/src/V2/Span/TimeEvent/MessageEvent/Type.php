<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudtrace/v2/trace.proto

namespace Google\Cloud\Trace\V2\Span\TimeEvent\MessageEvent;

/**
 * Indicates whether the message was sent or received.
 *
 * Protobuf type <code>google.devtools.cloudtrace.v2.Span.TimeEvent.MessageEvent.Type</code>
 */
class Type
{
    /**
     * Unknown event type.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Indicates a sent message.
     *
     * Generated from protobuf enum <code>SENT = 1;</code>
     */
    const SENT = 1;
    /**
     * Indicates a received message.
     *
     * Generated from protobuf enum <code>RECEIVED = 2;</code>
     */
    const RECEIVED = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Google\Cloud\Trace\V2\Span_TimeEvent_MessageEvent_Type::class);

