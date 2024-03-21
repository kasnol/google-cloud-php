<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/label.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a generic name-value label. A label has separate name and value
 * fields to support filtering with the `contains()` function. For more
 * information, see [Filtering on array-type
 * fields](https://cloud.google.com/security-command-center/docs/how-to-api-list-findings#array-contains-filtering).
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.Label</code>
 */
class Label extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the label.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Value that corresponds to the label's name.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     */
    private $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the label.
     *     @type string $value
     *           Value that corresponds to the label's name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\Label::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the label.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the label.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Value that corresponds to the label's name.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Value that corresponds to the label's name.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}

