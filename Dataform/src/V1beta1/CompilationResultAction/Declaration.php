<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1\CompilationResultAction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a relation which is not managed by Dataform but which may be
 * referenced by Dataform actions.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.CompilationResultAction.Declaration</code>
 */
class Declaration extends \Google\Protobuf\Internal\Message
{
    /**
     * Descriptor for the relation and its columns. Used as documentation only,
     * i.e. values here will result in no changes to the relation's metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.RelationDescriptor relation_descriptor = 1;</code>
     */
    private $relation_descriptor = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataform\V1beta1\RelationDescriptor $relation_descriptor
     *           Descriptor for the relation and its columns. Used as documentation only,
     *           i.e. values here will result in no changes to the relation's metadata.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Descriptor for the relation and its columns. Used as documentation only,
     * i.e. values here will result in no changes to the relation's metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.RelationDescriptor relation_descriptor = 1;</code>
     * @return \Google\Cloud\Dataform\V1beta1\RelationDescriptor|null
     */
    public function getRelationDescriptor()
    {
        return $this->relation_descriptor;
    }

    public function hasRelationDescriptor()
    {
        return isset($this->relation_descriptor);
    }

    public function clearRelationDescriptor()
    {
        unset($this->relation_descriptor);
    }

    /**
     * Descriptor for the relation and its columns. Used as documentation only,
     * i.e. values here will result in no changes to the relation's metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.RelationDescriptor relation_descriptor = 1;</code>
     * @param \Google\Cloud\Dataform\V1beta1\RelationDescriptor $var
     * @return $this
     */
    public function setRelationDescriptor($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataform\V1beta1\RelationDescriptor::class);
        $this->relation_descriptor = $var;

        return $this;
    }

}

