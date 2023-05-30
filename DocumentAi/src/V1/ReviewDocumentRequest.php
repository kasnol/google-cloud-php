<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for review document method.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.ReviewDocumentRequest</code>
 */
class ReviewDocumentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the HumanReviewConfig that the document will
     * be reviewed with.
     *
     * Generated from protobuf field <code>string human_review_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $human_review_config = '';
    /**
     * Whether the validation should be performed on the ad-hoc review request.
     *
     * Generated from protobuf field <code>bool enable_schema_validation = 3;</code>
     */
    private $enable_schema_validation = false;
    /**
     * The priority of the human review task.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ReviewDocumentRequest.Priority priority = 5;</code>
     */
    private $priority = 0;
    /**
     * The document schema of the human review task.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentSchema document_schema = 6;</code>
     */
    private $document_schema = null;
    protected $source;

    /**
     * @param string $humanReviewConfig Required. The resource name of the HumanReviewConfig that the document will
     *                                  be reviewed with. Please see
     *                                  {@see DocumentProcessorServiceClient::humanReviewConfigName()} for help formatting this field.
     *
     * @return \Google\Cloud\DocumentAI\V1\ReviewDocumentRequest
     *
     * @experimental
     */
    public static function build(string $humanReviewConfig): self
    {
        return (new self())
            ->setHumanReviewConfig($humanReviewConfig);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\Document $inline_document
     *           An inline document proto.
     *     @type string $human_review_config
     *           Required. The resource name of the HumanReviewConfig that the document will
     *           be reviewed with.
     *     @type bool $enable_schema_validation
     *           Whether the validation should be performed on the ad-hoc review request.
     *     @type int $priority
     *           The priority of the human review task.
     *     @type \Google\Cloud\DocumentAI\V1\DocumentSchema $document_schema
     *           The document schema of the human review task.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * An inline document proto.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document|null
     */
    public function getInlineDocument()
    {
        return $this->readOneof(4);
    }

    public function hasInlineDocument()
    {
        return $this->hasOneof(4);
    }

    /**
     * An inline document proto.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document $var
     * @return $this
     */
    public function setInlineDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Required. The resource name of the HumanReviewConfig that the document will
     * be reviewed with.
     *
     * Generated from protobuf field <code>string human_review_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getHumanReviewConfig()
    {
        return $this->human_review_config;
    }

    /**
     * Required. The resource name of the HumanReviewConfig that the document will
     * be reviewed with.
     *
     * Generated from protobuf field <code>string human_review_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setHumanReviewConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->human_review_config = $var;

        return $this;
    }

    /**
     * Whether the validation should be performed on the ad-hoc review request.
     *
     * Generated from protobuf field <code>bool enable_schema_validation = 3;</code>
     * @return bool
     */
    public function getEnableSchemaValidation()
    {
        return $this->enable_schema_validation;
    }

    /**
     * Whether the validation should be performed on the ad-hoc review request.
     *
     * Generated from protobuf field <code>bool enable_schema_validation = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableSchemaValidation($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_schema_validation = $var;

        return $this;
    }

    /**
     * The priority of the human review task.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ReviewDocumentRequest.Priority priority = 5;</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * The priority of the human review task.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ReviewDocumentRequest.Priority priority = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DocumentAI\V1\ReviewDocumentRequest\Priority::class);
        $this->priority = $var;

        return $this;
    }

    /**
     * The document schema of the human review task.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentSchema document_schema = 6;</code>
     * @return \Google\Cloud\DocumentAI\V1\DocumentSchema|null
     */
    public function getDocumentSchema()
    {
        return $this->document_schema;
    }

    public function hasDocumentSchema()
    {
        return isset($this->document_schema);
    }

    public function clearDocumentSchema()
    {
        unset($this->document_schema);
    }

    /**
     * The document schema of the human review task.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentSchema document_schema = 6;</code>
     * @param \Google\Cloud\DocumentAI\V1\DocumentSchema $var
     * @return $this
     */
    public function setDocumentSchema($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\DocumentSchema::class);
        $this->document_schema = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

