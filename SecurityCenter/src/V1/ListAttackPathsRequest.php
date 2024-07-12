<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for listing the attack paths for a given simulation or valued
 * resource.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.ListAttackPathsRequest</code>
 */
class ListAttackPathsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of parent to list attack paths.
     * Valid formats:
     * `organizations/{organization}`,
     * `organizations/{organization}/simulations/{simulation}`
     * `organizations/{organization}/simulations/{simulation}/attackExposureResults/{attack_exposure_result_v2}`
     * `organizations/{organization}/simulations/{simulation}/valuedResources/{valued_resource}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The filter expression that filters the attack path in the response.
     * Supported fields:
     *   * `valued_resources` supports =
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * The value returned by the last `ListAttackPathsResponse`; indicates
     * that this is a continuation of a prior `ListAttackPaths` call, and
     * that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * The maximum number of results to return in a single response. Default is
     * 10, minimum is 1, maximum is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     */
    private $page_size = 0;

    /**
     * @param string $parent Required. Name of parent to list attack paths.
     *
     *                       Valid formats:
     *                       `organizations/{organization}`,
     *                       `organizations/{organization}/simulations/{simulation}`
     *                       `organizations/{organization}/simulations/{simulation}/attackExposureResults/{attack_exposure_result_v2}`
     *                       `organizations/{organization}/simulations/{simulation}/valuedResources/{valued_resource}`
     *                       Please see {@see SecurityCenterClient::valuedResourceName()} for help formatting this field.
     *
     * @return \Google\Cloud\SecurityCenter\V1\ListAttackPathsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Name of parent to list attack paths.
     *           Valid formats:
     *           `organizations/{organization}`,
     *           `organizations/{organization}/simulations/{simulation}`
     *           `organizations/{organization}/simulations/{simulation}/attackExposureResults/{attack_exposure_result_v2}`
     *           `organizations/{organization}/simulations/{simulation}/valuedResources/{valued_resource}`
     *     @type string $filter
     *           The filter expression that filters the attack path in the response.
     *           Supported fields:
     *             * `valued_resources` supports =
     *     @type string $page_token
     *           The value returned by the last `ListAttackPathsResponse`; indicates
     *           that this is a continuation of a prior `ListAttackPaths` call, and
     *           that the system should return the next page of data.
     *     @type int $page_size
     *           The maximum number of results to return in a single response. Default is
     *           10, minimum is 1, maximum is 1000.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of parent to list attack paths.
     * Valid formats:
     * `organizations/{organization}`,
     * `organizations/{organization}/simulations/{simulation}`
     * `organizations/{organization}/simulations/{simulation}/attackExposureResults/{attack_exposure_result_v2}`
     * `organizations/{organization}/simulations/{simulation}/valuedResources/{valued_resource}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of parent to list attack paths.
     * Valid formats:
     * `organizations/{organization}`,
     * `organizations/{organization}/simulations/{simulation}`
     * `organizations/{organization}/simulations/{simulation}/attackExposureResults/{attack_exposure_result_v2}`
     * `organizations/{organization}/simulations/{simulation}/valuedResources/{valued_resource}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The filter expression that filters the attack path in the response.
     * Supported fields:
     *   * `valued_resources` supports =
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * The filter expression that filters the attack path in the response.
     * Supported fields:
     *   * `valued_resources` supports =
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * The value returned by the last `ListAttackPathsResponse`; indicates
     * that this is a continuation of a prior `ListAttackPaths` call, and
     * that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The value returned by the last `ListAttackPathsResponse`; indicates
     * that this is a continuation of a prior `ListAttackPaths` call, and
     * that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * The maximum number of results to return in a single response. Default is
     * 10, minimum is 1, maximum is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of results to return in a single response. Default is
     * 10, minimum is 1, maximum is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

