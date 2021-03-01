<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/customers.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contact information for a customer account.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ContactInfo</code>
 */
class ContactInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * First name of the contact in the customer account.
     *
     * Generated from protobuf field <code>string first_name = 1;</code>
     */
    private $first_name = '';
    /**
     * Last name of the contact in the customer account.
     *
     * Generated from protobuf field <code>string last_name = 2;</code>
     */
    private $last_name = '';
    /**
     * Output only. Display name of the contact in the customer account.
     * Populated by combining customer first name and last name.
     *
     * Generated from protobuf field <code>string display_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $display_name = '';
    /**
     * Email of the contact in the customer account.
     * Email is required for entitlements that need creation of admin.google.com
     * accounts. The email will be the username used in credentials to access the
     * admin.google.com account.
     *
     * Generated from protobuf field <code>string email = 5;</code>
     */
    private $email = '';
    /**
     * Optional. Job title of the contact in the customer account.
     *
     * Generated from protobuf field <code>string title = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $title = '';
    /**
     * Phone number of the contact in the customer account.
     *
     * Generated from protobuf field <code>string phone = 7;</code>
     */
    private $phone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $first_name
     *           First name of the contact in the customer account.
     *     @type string $last_name
     *           Last name of the contact in the customer account.
     *     @type string $display_name
     *           Output only. Display name of the contact in the customer account.
     *           Populated by combining customer first name and last name.
     *     @type string $email
     *           Email of the contact in the customer account.
     *           Email is required for entitlements that need creation of admin.google.com
     *           accounts. The email will be the username used in credentials to access the
     *           admin.google.com account.
     *     @type string $title
     *           Optional. Job title of the contact in the customer account.
     *     @type string $phone
     *           Phone number of the contact in the customer account.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Customers::initOnce();
        parent::__construct($data);
    }

    /**
     * First name of the contact in the customer account.
     *
     * Generated from protobuf field <code>string first_name = 1;</code>
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * First name of the contact in the customer account.
     *
     * Generated from protobuf field <code>string first_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFirstName($var)
    {
        GPBUtil::checkString($var, True);
        $this->first_name = $var;

        return $this;
    }

    /**
     * Last name of the contact in the customer account.
     *
     * Generated from protobuf field <code>string last_name = 2;</code>
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Last name of the contact in the customer account.
     *
     * Generated from protobuf field <code>string last_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLastName($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_name = $var;

        return $this;
    }

    /**
     * Output only. Display name of the contact in the customer account.
     * Populated by combining customer first name and last name.
     *
     * Generated from protobuf field <code>string display_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. Display name of the contact in the customer account.
     * Populated by combining customer first name and last name.
     *
     * Generated from protobuf field <code>string display_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Email of the contact in the customer account.
     * Email is required for entitlements that need creation of admin.google.com
     * accounts. The email will be the username used in credentials to access the
     * admin.google.com account.
     *
     * Generated from protobuf field <code>string email = 5;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Email of the contact in the customer account.
     * Email is required for entitlements that need creation of admin.google.com
     * accounts. The email will be the username used in credentials to access the
     * admin.google.com account.
     *
     * Generated from protobuf field <code>string email = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Optional. Job title of the contact in the customer account.
     *
     * Generated from protobuf field <code>string title = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Optional. Job title of the contact in the customer account.
     *
     * Generated from protobuf field <code>string title = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Phone number of the contact in the customer account.
     *
     * Generated from protobuf field <code>string phone = 7;</code>
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Phone number of the contact in the customer account.
     *
     * Generated from protobuf field <code>string phone = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone = $var;

        return $this;
    }

}
