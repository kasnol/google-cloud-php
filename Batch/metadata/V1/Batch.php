<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/batch/v1/batch.proto

namespace GPBMetadata\Google\Cloud\Batch\V1;

class Batch
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
        \GPBMetadata\Google\Api\FieldInfo::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Batch\V1\Job::initOnce();
        \GPBMetadata\Google\Cloud\Batch\V1\Task::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
!google/cloud/batch/v1/batch.protogoogle.cloud.batch.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/field_info.protogoogle/api/resource.protogoogle/cloud/batch/v1/job.proto google/cloud/batch/v1/task.proto#google/longrunning/operations.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.proto"�
CreateJobRequest0
parent (	B �A�Abatch.googleapis.com/Job
job_id (	,
job (2.google.cloud.batch.v1.JobB�A

request_id (	B�A"?
GetJobRequest.
name (	B �A�A
batch.googleapis.com/Job"N
DeleteJobRequest
name (	
reason (	B�A

request_id (	B�A"o
ListJobsRequest
parent (	
filter (	
order_by (	B�A
	page_size (

page_token (	"j
ListJobsResponse(
jobs (2.google.cloud.batch.v1.Job
next_page_token (	
unreachable (	"�
ListTasksRequest6
parent (	B&�A�A 
batch.googleapis.com/TaskGroup
filter (	
	page_size (

page_token (	"m
ListTasksResponse*
tasks (2.google.cloud.batch.v1.Task
next_page_token (	
unreachable (	"A
GetTaskRequest/
name (	B!�A�A
batch.googleapis.com/Task"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A2�
BatchService�
	CreateJob\'.google.cloud.batch.v1.CreateJobRequest.google.cloud.batch.v1.Job"I���/"(/v1/{parent=projects/*/locations/*}/jobs:job�Aparent,job,job_id�
GetJob$.google.cloud.batch.v1.GetJobRequest.google.cloud.batch.v1.Job"7���*(/v1/{name=projects/*/locations/*/jobs/*}�Aname�
	DeleteJob\'.google.cloud.batch.v1.DeleteJobRequest.google.longrunning.Operation"z���**(/v1/{name=projects/*/locations/*/jobs/*}�Aname�A@
google.protobuf.Empty\'google.cloud.batch.v1.OperationMetadata�
ListJobs&.google.cloud.batch.v1.ListJobsRequest\'.google.cloud.batch.v1.ListJobsResponse"9���*(/v1/{parent=projects/*/locations/*}/jobs�Aparent�
GetTask%.google.cloud.batch.v1.GetTaskRequest.google.cloud.batch.v1.Task"L���?=/v1/{name=projects/*/locations/*/jobs/*/taskGroups/*/tasks/*}�Aname�
	ListTasks\'.google.cloud.batch.v1.ListTasksRequest(.google.cloud.batch.v1.ListTasksResponse"N���?=/v1/{parent=projects/*/locations/*/jobs/*/taskGroups/*}/tasks�AparentH�Abatch.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.batch.v1B
BatchProtoPZ/cloud.google.com/go/batch/apiv1/batchpb;batchpb�GCB�Google.Cloud.Batch.V1�Google\\Cloud\\Batch\\V1�Google::Cloud::Batch::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

