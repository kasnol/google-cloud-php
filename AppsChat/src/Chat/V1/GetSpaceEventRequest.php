<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/space_event.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for getting a space event.
 *
 * Generated from protobuf message <code>google.chat.v1.GetSpaceEventRequest</code>
 */
class GetSpaceEventRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the space event.
     * Format: `spaces/{space}/spaceEvents/{spaceEvent}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The resource name of the space event.
     *
     *                     Format: `spaces/{space}/spaceEvents/{spaceEvent}`
     *                     Please see {@see ChatServiceClient::spaceEventName()} for help formatting this field.
     *
     * @return \Google\Apps\Chat\V1\GetSpaceEventRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the space event.
     *           Format: `spaces/{space}/spaceEvents/{spaceEvent}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\SpaceEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the space event.
     * Format: `spaces/{space}/spaceEvents/{spaceEvent}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the space event.
     * Format: `spaces/{space}/spaceEvents/{spaceEvent}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

