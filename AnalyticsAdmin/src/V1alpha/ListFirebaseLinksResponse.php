<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListFirebaseLinks RPC
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ListFirebaseLinksResponse</code>
 */
class ListFirebaseLinksResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of FirebaseLinks. This will have at most one value.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.FirebaseLink firebase_links = 1;</code>
     */
    private $firebase_links;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\FirebaseLink[]|\Google\Protobuf\Internal\RepeatedField $firebase_links
     *           List of FirebaseLinks. This will have at most one value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * List of FirebaseLinks. This will have at most one value.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.FirebaseLink firebase_links = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFirebaseLinks()
    {
        return $this->firebase_links;
    }

    /**
     * List of FirebaseLinks. This will have at most one value.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.FirebaseLink firebase_links = 1;</code>
     * @param \Google\Analytics\Admin\V1alpha\FirebaseLink[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFirebaseLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\FirebaseLink::class);
        $this->firebase_links = $arr;

        return $this;
    }

}
