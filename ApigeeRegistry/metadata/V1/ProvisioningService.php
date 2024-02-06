<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeregistry/v1/provisioning_service.proto

namespace GPBMetadata\Google\Cloud\Apigeeregistry\V1;

class ProvisioningService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/cloud/apigeeregistry/v1/provisioning_service.protogoogle.cloud.apigeeregistry.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/timestamp.proto"�
CreateInstanceRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
instance_id (	B�A?
instance (2(.google.cloud.apigeeregistry.v1.InstanceB�A"U
DeleteInstanceRequest<
name (	B.�A�A(
&apigeeregistry.googleapis.com/Instance"R
GetInstanceRequest<
name (	B.�A�A(
&apigeeregistry.googleapis.com/Instance"�
OperationMetadata/
create_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp
target (	
verb (	
status_message (	
cancellation_requested (
api_version (	"�
Instance
name (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AB
state (2..google.cloud.apigeeregistry.v1.Instance.StateB�A
state_message (	B�AD
config (2/.google.cloud.apigeeregistry.v1.Instance.ConfigB�A;
Config
location (	B�A
cmek_key_name (	B�A"n
State
STATE_UNSPECIFIED 
INACTIVE
CREATING

ACTIVE
UPDATING
DELETING

FAILED:i�Af
&apigeeregistry.googleapis.com/Instance<projects/{project}/locations/{location}/instances/{instance}2�
Provisioning�
CreateInstance5.google.cloud.apigeeregistry.v1.CreateInstanceRequest.google.longrunning.Operation"}�A
InstanceOperationMetadata�Aparent,instance,instance_id���9"-/v1/{parent=projects/*/locations/*}/instances:instance�
DeleteInstance5.google.cloud.apigeeregistry.v1.DeleteInstanceRequest.google.longrunning.Operation"i�A*
google.protobuf.EmptyOperationMetadata�Aname���/*-/v1/{name=projects/*/locations/*/instances/*}�
GetInstance2.google.cloud.apigeeregistry.v1.GetInstanceRequest(.google.cloud.apigeeregistry.v1.Instance"<�Aname���/-/v1/{name=projects/*/locations/*/instances/*}Q�Aapigeeregistry.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
"com.google.cloud.apigeeregistry.v1BProvisioningServiceProtoPZJcloud.google.com/go/apigeeregistry/apiv1/apigeeregistrypb;apigeeregistrypb�Google.Cloud.ApigeeRegistry.V1�Google\\Cloud\\ApigeeRegistry\\V1�!Google::Cloud::ApigeeRegistry::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

