<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/apikeys/v2/apikeys.proto

namespace Google\Cloud\ApiKeys\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for `GetKeyString` method.
 *
 * Generated from protobuf message <code>google.api.apikeys.v2.GetKeyStringResponse</code>
 */
class GetKeyStringResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * An encrypted and signed value of the key.
     *
     * Generated from protobuf field <code>string key_string = 1;</code>
     */
    private $key_string = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key_string
     *           An encrypted and signed value of the key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Apikeys\V2\Apikeys::initOnce();
        parent::__construct($data);
    }

    /**
     * An encrypted and signed value of the key.
     *
     * Generated from protobuf field <code>string key_string = 1;</code>
     * @return string
     */
    public function getKeyString()
    {
        return $this->key_string;
    }

    /**
     * An encrypted and signed value of the key.
     *
     * Generated from protobuf field <code>string key_string = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyString($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_string = $var;

        return $this;
    }

}
