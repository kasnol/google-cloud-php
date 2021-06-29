<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/human_annotation_config.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for how human labeling task should be done.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.HumanAnnotationConfig</code>
 */
class HumanAnnotationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Instruction resource name.
     *
     * Generated from protobuf field <code>string instruction = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instruction = '';
    /**
     * Required. A human-readable name for AnnotatedDataset defined by
     * users. Maximum of 64 characters
     * .
     *
     * Generated from protobuf field <code>string annotated_dataset_display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $annotated_dataset_display_name = '';
    /**
     * Optional. A human-readable description for AnnotatedDataset.
     * The description can be up to 10000 characters long.
     *
     * Generated from protobuf field <code>string annotated_dataset_description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $annotated_dataset_description = '';
    /**
     * Optional. A human-readable label used to logically group labeling tasks.
     * This string must match the regular expression `[a-zA-Z\\d_-]{0,128}`.
     *
     * Generated from protobuf field <code>string label_group = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $label_group = '';
    /**
     * Optional. The Language of this question, as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt).
     * Default value is en-US.
     * Only need to set this when task is language related. For example, French
     * text classification.
     *
     * Generated from protobuf field <code>string language_code = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $language_code = '';
    /**
     * Optional. Replication of questions. Each question will be sent to up to
     * this number of contributors to label. Aggregated answers will be returned.
     * Default is set to 1.
     * For image related labeling, valid values are 1, 3, 5.
     *
     * Generated from protobuf field <code>int32 replica_count = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $replica_count = 0;
    /**
     * Optional. Maximum duration for contributors to answer a question. Maximum
     * is 3600 seconds. Default is 3600 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration question_duration = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $question_duration = null;
    /**
     * Optional. If you want your own labeling contributors to manage and work on
     * this labeling request, you can set these contributors here. We will give
     * them access to the question types in crowdcompute. Note that these
     * emails must be registered in crowdcompute worker UI:
     * https://crowd-compute.appspot.com/
     *
     * Generated from protobuf field <code>repeated string contributor_emails = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $contributor_emails;
    /**
     * Email of the user who started the labeling task and should be notified by
     * email. If empty no notification will be sent.
     *
     * Generated from protobuf field <code>string user_email_address = 10;</code>
     */
    private $user_email_address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instruction
     *           Required. Instruction resource name.
     *     @type string $annotated_dataset_display_name
     *           Required. A human-readable name for AnnotatedDataset defined by
     *           users. Maximum of 64 characters
     *           .
     *     @type string $annotated_dataset_description
     *           Optional. A human-readable description for AnnotatedDataset.
     *           The description can be up to 10000 characters long.
     *     @type string $label_group
     *           Optional. A human-readable label used to logically group labeling tasks.
     *           This string must match the regular expression `[a-zA-Z\\d_-]{0,128}`.
     *     @type string $language_code
     *           Optional. The Language of this question, as a
     *           [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt).
     *           Default value is en-US.
     *           Only need to set this when task is language related. For example, French
     *           text classification.
     *     @type int $replica_count
     *           Optional. Replication of questions. Each question will be sent to up to
     *           this number of contributors to label. Aggregated answers will be returned.
     *           Default is set to 1.
     *           For image related labeling, valid values are 1, 3, 5.
     *     @type \Google\Protobuf\Duration $question_duration
     *           Optional. Maximum duration for contributors to answer a question. Maximum
     *           is 3600 seconds. Default is 3600 seconds.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $contributor_emails
     *           Optional. If you want your own labeling contributors to manage and work on
     *           this labeling request, you can set these contributors here. We will give
     *           them access to the question types in crowdcompute. Note that these
     *           emails must be registered in crowdcompute worker UI:
     *           https://crowd-compute.appspot.com/
     *     @type string $user_email_address
     *           Email of the user who started the labeling task and should be notified by
     *           email. If empty no notification will be sent.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\HumanAnnotationConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Instruction resource name.
     *
     * Generated from protobuf field <code>string instruction = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * Required. Instruction resource name.
     *
     * Generated from protobuf field <code>string instruction = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstruction($var)
    {
        GPBUtil::checkString($var, True);
        $this->instruction = $var;

        return $this;
    }

    /**
     * Required. A human-readable name for AnnotatedDataset defined by
     * users. Maximum of 64 characters
     * .
     *
     * Generated from protobuf field <code>string annotated_dataset_display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAnnotatedDatasetDisplayName()
    {
        return $this->annotated_dataset_display_name;
    }

    /**
     * Required. A human-readable name for AnnotatedDataset defined by
     * users. Maximum of 64 characters
     * .
     *
     * Generated from protobuf field <code>string annotated_dataset_display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAnnotatedDatasetDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->annotated_dataset_display_name = $var;

        return $this;
    }

    /**
     * Optional. A human-readable description for AnnotatedDataset.
     * The description can be up to 10000 characters long.
     *
     * Generated from protobuf field <code>string annotated_dataset_description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAnnotatedDatasetDescription()
    {
        return $this->annotated_dataset_description;
    }

    /**
     * Optional. A human-readable description for AnnotatedDataset.
     * The description can be up to 10000 characters long.
     *
     * Generated from protobuf field <code>string annotated_dataset_description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAnnotatedDatasetDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->annotated_dataset_description = $var;

        return $this;
    }

    /**
     * Optional. A human-readable label used to logically group labeling tasks.
     * This string must match the regular expression `[a-zA-Z\\d_-]{0,128}`.
     *
     * Generated from protobuf field <code>string label_group = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLabelGroup()
    {
        return $this->label_group;
    }

    /**
     * Optional. A human-readable label used to logically group labeling tasks.
     * This string must match the regular expression `[a-zA-Z\\d_-]{0,128}`.
     *
     * Generated from protobuf field <code>string label_group = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLabelGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->label_group = $var;

        return $this;
    }

    /**
     * Optional. The Language of this question, as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt).
     * Default value is en-US.
     * Only need to set this when task is language related. For example, French
     * text classification.
     *
     * Generated from protobuf field <code>string language_code = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The Language of this question, as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt).
     * Default value is en-US.
     * Only need to set this when task is language related. For example, French
     * text classification.
     *
     * Generated from protobuf field <code>string language_code = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Optional. Replication of questions. Each question will be sent to up to
     * this number of contributors to label. Aggregated answers will be returned.
     * Default is set to 1.
     * For image related labeling, valid values are 1, 3, 5.
     *
     * Generated from protobuf field <code>int32 replica_count = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getReplicaCount()
    {
        return $this->replica_count;
    }

    /**
     * Optional. Replication of questions. Each question will be sent to up to
     * this number of contributors to label. Aggregated answers will be returned.
     * Default is set to 1.
     * For image related labeling, valid values are 1, 3, 5.
     *
     * Generated from protobuf field <code>int32 replica_count = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setReplicaCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->replica_count = $var;

        return $this;
    }

    /**
     * Optional. Maximum duration for contributors to answer a question. Maximum
     * is 3600 seconds. Default is 3600 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration question_duration = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getQuestionDuration()
    {
        return isset($this->question_duration) ? $this->question_duration : null;
    }

    public function hasQuestionDuration()
    {
        return isset($this->question_duration);
    }

    public function clearQuestionDuration()
    {
        unset($this->question_duration);
    }

    /**
     * Optional. Maximum duration for contributors to answer a question. Maximum
     * is 3600 seconds. Default is 3600 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration question_duration = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setQuestionDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->question_duration = $var;

        return $this;
    }

    /**
     * Optional. If you want your own labeling contributors to manage and work on
     * this labeling request, you can set these contributors here. We will give
     * them access to the question types in crowdcompute. Note that these
     * emails must be registered in crowdcompute worker UI:
     * https://crowd-compute.appspot.com/
     *
     * Generated from protobuf field <code>repeated string contributor_emails = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContributorEmails()
    {
        return $this->contributor_emails;
    }

    /**
     * Optional. If you want your own labeling contributors to manage and work on
     * this labeling request, you can set these contributors here. We will give
     * them access to the question types in crowdcompute. Note that these
     * emails must be registered in crowdcompute worker UI:
     * https://crowd-compute.appspot.com/
     *
     * Generated from protobuf field <code>repeated string contributor_emails = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContributorEmails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->contributor_emails = $arr;

        return $this;
    }

    /**
     * Email of the user who started the labeling task and should be notified by
     * email. If empty no notification will be sent.
     *
     * Generated from protobuf field <code>string user_email_address = 10;</code>
     * @return string
     */
    public function getUserEmailAddress()
    {
        return $this->user_email_address;
    }

    /**
     * Email of the user who started the labeling task and should be notified by
     * email. If empty no notification will be sent.
     *
     * Generated from protobuf field <code>string user_email_address = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setUserEmailAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_email_address = $var;

        return $this;
    }

}
