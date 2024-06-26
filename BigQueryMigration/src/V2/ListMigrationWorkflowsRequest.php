<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/migration/v2/migration_service.proto

namespace Google\Cloud\BigQuery\Migration\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to list previously created migration workflows.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.migration.v2.ListMigrationWorkflowsRequest</code>
 */
class ListMigrationWorkflowsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project and location of the migration workflows to list.
     * Example: `projects/123/locations/us`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The list of fields to be retrieved.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2;</code>
     */
    protected $read_mask = null;
    /**
     * The maximum number of migration workflows to return. The service may return
     * fewer than this number.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    protected $page_size = 0;
    /**
     * A page token, received from previous `ListMigrationWorkflows` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListMigrationWorkflows`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The project and location of the migration workflows to list.
     *                       Example: `projects/123/locations/us`
     *                       Please see {@see MigrationServiceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\BigQuery\Migration\V2\ListMigrationWorkflowsRequest
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
     *           Required. The project and location of the migration workflows to list.
     *           Example: `projects/123/locations/us`
     *     @type \Google\Protobuf\FieldMask $read_mask
     *           The list of fields to be retrieved.
     *     @type int $page_size
     *           The maximum number of migration workflows to return. The service may return
     *           fewer than this number.
     *     @type string $page_token
     *           A page token, received from previous `ListMigrationWorkflows` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListMigrationWorkflows`
     *           must match the call that provided the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Migration\V2\MigrationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project and location of the migration workflows to list.
     * Example: `projects/123/locations/us`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project and location of the migration workflows to list.
     * Example: `projects/123/locations/us`
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
     * The list of fields to be retrieved.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getReadMask()
    {
        return $this->read_mask;
    }

    public function hasReadMask()
    {
        return isset($this->read_mask);
    }

    public function clearReadMask()
    {
        unset($this->read_mask);
    }

    /**
     * The list of fields to be retrieved.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setReadMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->read_mask = $var;

        return $this;
    }

    /**
     * The maximum number of migration workflows to return. The service may return
     * fewer than this number.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of migration workflows to return. The service may return
     * fewer than this number.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, received from previous `ListMigrationWorkflows` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListMigrationWorkflows`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from previous `ListMigrationWorkflows` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListMigrationWorkflows`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

