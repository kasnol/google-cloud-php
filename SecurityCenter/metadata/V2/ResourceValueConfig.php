<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/resource_value_config.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V2;

class ResourceValueConfig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/cloud/securitycenter/v2/resource_value_config.protogoogle.cloud.securitycenter.v2google/api/resource.protogoogle/protobuf/timestamp.proto"�
ResourceValueConfig
name (	E
resource_value (2-.google.cloud.securitycenter.v2.ResourceValue

tag_values (	B�A
resource_type (	
scope (	q
resource_labels_selector (2O.google.cloud.securitycenter.v2.ResourceValueConfig.ResourceLabelsSelectorEntry
description (	4
create_time (2.google.protobuf.TimestampB�A4
update_time	 (2.google.protobuf.TimestampB�A}
!sensitive_data_protection_mapping (2R.google.cloud.securitycenter.v2.ResourceValueConfig.SensitiveDataProtectionMapping�
SensitiveDataProtectionMappingO
high_sensitivity_mapping (2-.google.cloud.securitycenter.v2.ResourceValueQ
medium_sensitivity_mapping (2-.google.cloud.securitycenter.v2.ResourceValue=
ResourceLabelsSelectorEntry
key (	
value (	:8:��A~
1securitycenter.googleapis.com/ResourceValueConfigIorganizations/{organization}/resourceValueConfigs/{resource_value_config}*X
ResourceValue
RESOURCE_VALUE_UNSPECIFIED 
HIGH

MEDIUM
LOW
NONEB�
"com.google.cloud.securitycenter.v2BResourceValueConfigProtoPZJcloud.google.com/go/securitycenter/apiv2/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V2�Google\\Cloud\\SecurityCenter\\V2�!Google::Cloud::SecurityCenter::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

