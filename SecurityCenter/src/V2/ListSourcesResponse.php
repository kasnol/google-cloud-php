<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for listing sources.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.ListSourcesResponse</code>
 */
class ListSourcesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Sources belonging to the requested parent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.Source sources = 1;</code>
     */
    private $sources;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\SecurityCenter\V2\Source>|\Google\Protobuf\Internal\RepeatedField $sources
     *           Sources belonging to the requested parent.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Sources belonging to the requested parent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.Source sources = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * Sources belonging to the requested parent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.Source sources = 1;</code>
     * @param array<\Google\Cloud\SecurityCenter\V2\Source>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V2\Source::class);
        $this->sources = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

