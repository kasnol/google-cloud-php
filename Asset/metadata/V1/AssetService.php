<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace GPBMetadata\Google\Cloud\Asset\V1;

class AssetService
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
        \GPBMetadata\Google\Cloud\Asset\V1\Assets::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Expr::initOnce();
        $pool->internalAddGeneratedFile(
            '
Ӕ
)google/cloud/asset/v1/asset_service.protogoogle.cloud.asset.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"google/cloud/asset/v1/assets.protogoogle/iam/v1/policy.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.protogoogle/rpc/status.protogoogle/type/expr.proto"[
#AnalyzeIamPolicyLongrunningMetadata4
create_time (2.google.protobuf.TimestampB�A"�
ExportAssetsRequest7
parent (	B\'�A�A!cloudasset.googleapis.com/Asset-
	read_time (2.google.protobuf.Timestamp
asset_types (	8
content_type (2".google.cloud.asset.v1.ContentType?
output_config (2#.google.cloud.asset.v1.OutputConfigB�A
relationship_types (	"�
ExportAssetsResponse-
	read_time (2.google.protobuf.Timestamp:
output_config (2#.google.cloud.asset.v1.OutputConfig:
output_result (2#.google.cloud.asset.v1.OutputResult"�
ListAssetsRequest7
parent (	B\'�A�A!cloudasset.googleapis.com/Asset-
	read_time (2.google.protobuf.Timestamp
asset_types (	8
content_type (2".google.cloud.asset.v1.ContentType
	page_size (

page_token (	
relationship_types (	"�
ListAssetsResponse-
	read_time (2.google.protobuf.Timestamp,
assets (2.google.cloud.asset.v1.Asset
next_page_token (	"�
BatchGetAssetsHistoryRequest7
parent (	B\'�A�A!cloudasset.googleapis.com/Asset
asset_names (	=
content_type (2".google.cloud.asset.v1.ContentTypeB�A@
read_time_window (2!.google.cloud.asset.v1.TimeWindowB�A
relationship_types (	B�A"U
BatchGetAssetsHistoryResponse4
assets (2$.google.cloud.asset.v1.TemporalAsset"n
CreateFeedRequest
parent (	B�A
feed_id (	B�A.
feed (2.google.cloud.asset.v1.FeedB�A"F
GetFeedRequest4
name (	B&�A�A 
cloudasset.googleapis.com/Feed"\'
ListFeedsRequest
parent (	B�A"?
ListFeedsResponse*
feeds (2.google.cloud.asset.v1.Feed"y
UpdateFeedRequest.
feed (2.google.cloud.asset.v1.FeedB�A4
update_mask (2.google.protobuf.FieldMaskB�A"I
DeleteFeedRequest4
name (	B&�A�A 
cloudasset.googleapis.com/Feed"�
OutputConfig@
gcs_destination (2%.google.cloud.asset.v1.GcsDestinationH J
bigquery_destination (2*.google.cloud.asset.v1.BigQueryDestinationH B
destination"V
OutputResult<

gcs_result (2&.google.cloud.asset.v1.GcsOutputResultH B
result"
GcsOutputResult
uris (	"C
GcsDestination
uri (	H 

uri_prefix (	H B

object_uri"�
BigQueryDestination
dataset (	B�A
table (	B�A
force (<
partition_spec (2$.google.cloud.asset.v1.PartitionSpec&
separate_tables_per_asset_type ("�
PartitionSpecH
partition_key (21.google.cloud.asset.v1.PartitionSpec.PartitionKey"N
PartitionKey
PARTITION_KEY_UNSPECIFIED 
	READ_TIME
REQUEST_TIME""
PubsubDestination
topic (	"i
FeedOutputConfigF
pubsub_destination (2(.google.cloud.asset.v1.PubsubDestinationH B
destination"�
Feed
name (	B�A
asset_names (	
asset_types (	8
content_type (2".google.cloud.asset.v1.ContentTypeH
feed_output_config (2\'.google.cloud.asset.v1.FeedOutputConfigB�A$
	condition (2.google.type.Expr
relationship_types (	:��A�
cloudasset.googleapis.com/Feedprojects/{project}/feeds/{feed}folders/{folder}/feeds/{feed})organizations/{organization}/feeds/{feed} "�
SearchAllResourcesRequest
scope (	B�A
query (	B�A
asset_types (	B�A
	page_size (B�A

page_token (	B�A
order_by (	B�A2
	read_mask (2.google.protobuf.FieldMaskB�A"s
SearchAllResourcesResponse<
results (2+.google.cloud.asset.v1.ResourceSearchResult
next_page_token (	"�
SearchAllIamPoliciesRequest
scope (	B�A
query (	B�A
	page_size (B�A

page_token (	B�A
asset_types (	B�A
order_by (	B�A"v
SearchAllIamPoliciesResponse=
results (2,.google.cloud.asset.v1.IamPolicySearchResult
next_page_token (	"�
IamPolicyAnalysisQuery
scope (	B�A^
resource_selector (2>.google.cloud.asset.v1.IamPolicyAnalysisQuery.ResourceSelectorB�A^
identity_selector (2>.google.cloud.asset.v1.IamPolicyAnalysisQuery.IdentitySelectorB�AZ
access_selector (2<.google.cloud.asset.v1.IamPolicyAnalysisQuery.AccessSelectorB�AK
options (25.google.cloud.asset.v1.IamPolicyAnalysisQuery.OptionsB�A^
condition_context (2>.google.cloud.asset.v1.IamPolicyAnalysisQuery.ConditionContextB�A3
ResourceSelector
full_resource_name (	B�A)
IdentitySelector
identity (	B�A>
AccessSelector
roles (	B�A
permissions (	B�A�
Options
expand_groups (B�A
expand_roles (B�A
expand_resources (B�A"
output_resource_edges (B�A
output_group_edges (B�A2
%analyze_service_account_impersonation (B�AT
ConditionContext1
access_time (2.google.protobuf.TimestampH B
TimeContext"�
AnalyzeIamPolicyRequestJ
analysis_query (2-.google.cloud.asset.v1.IamPolicyAnalysisQueryB�A!
saved_analysis_query (	B�A9
execution_timeout (2.google.protobuf.DurationB�A"�
AnalyzeIamPolicyResponseX
main_analysis (2A.google.cloud.asset.v1.AnalyzeIamPolicyResponse.IamPolicyAnalysisq
&service_account_impersonation_analysis (2A.google.cloud.asset.v1.AnalyzeIamPolicyResponse.IamPolicyAnalysis
fully_explored (�
IamPolicyAnalysisE
analysis_query (2-.google.cloud.asset.v1.IamPolicyAnalysisQueryH
analysis_results (2..google.cloud.asset.v1.IamPolicyAnalysisResult
fully_explored (J
non_critical_errors (2-.google.cloud.asset.v1.IamPolicyAnalysisState"�
IamPolicyAnalysisOutputConfig^
gcs_destination (2C.google.cloud.asset.v1.IamPolicyAnalysisOutputConfig.GcsDestinationH h
bigquery_destination (2H.google.cloud.asset.v1.IamPolicyAnalysisOutputConfig.BigQueryDestinationH "
GcsDestination
uri (	B�A�
BigQueryDestination
dataset (	B�A
table_prefix (	B�Al
partition_key (2U.google.cloud.asset.v1.IamPolicyAnalysisOutputConfig.BigQueryDestination.PartitionKey
write_disposition (	B�A"?
PartitionKey
PARTITION_KEY_UNSPECIFIED 
REQUEST_TIMEB
destination"�
"AnalyzeIamPolicyLongrunningRequestJ
analysis_query (2-.google.cloud.asset.v1.IamPolicyAnalysisQueryB�A!
saved_analysis_query (	B�AP
output_config (24.google.cloud.asset.v1.IamPolicyAnalysisOutputConfigB�A"%
#AnalyzeIamPolicyLongrunningResponse"�

SavedQuery
name (	
description (	4
create_time (2.google.protobuf.TimestampB�A
creator (	B�A9
last_update_time (2.google.protobuf.TimestampB�A
last_updater (	B�A=
labels (2-.google.cloud.asset.v1.SavedQuery.LabelsEntry?
content (2..google.cloud.asset.v1.SavedQuery.QueryContents
QueryContentR
iam_policy_analysis_query (2-.google.cloud.asset.v1.IamPolicyAnalysisQueryH B
query_content-
LabelsEntry
key (	
value (	:8:��A�
$cloudasset.googleapis.com/SavedQuery-projects/{project}/savedQueries/{saved_query}+folders/{folder}/savedQueries/{saved_query}7organizations/{organization}/savedQueries/{saved_query}"�
CreateSavedQueryRequest<
parent (	B,�A�A&$cloudasset.googleapis.com/SavedQuery;
saved_query (2!.google.cloud.asset.v1.SavedQueryB�A
saved_query_id (	B�A"R
GetSavedQueryRequest:
name (	B,�A�A&
$cloudasset.googleapis.com/SavedQuery"�
ListSavedQueriesRequest<
parent (	B,�A�A&$cloudasset.googleapis.com/SavedQuery
filter (	B�A
	page_size (B�A

page_token (	B�A"m
ListSavedQueriesResponse8
saved_queries (2!.google.cloud.asset.v1.SavedQuery
next_page_token (	"�
UpdateSavedQueryRequest;
saved_query (2!.google.cloud.asset.v1.SavedQueryB�A4
update_mask (2.google.protobuf.FieldMaskB�A"U
DeleteSavedQueryRequest:
name (	B,�A�A&
$cloudasset.googleapis.com/SavedQuery"�
AnalyzeMoveRequestE
resource (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project%
destination_parent (	B	�A�A
*D
view (26.google.cloud.asset.v1.AnalyzeMoveRequest.AnalysisView"B
AnalysisView
ANALYSIS_VIEW_UNSPECIFIED 
FULL	
BASIC"Q
AnalyzeMoveResponse:
move_analysis (2#.google.cloud.asset.v1.MoveAnalysis"�
MoveAnalysis
display_name (	=
analysis (2).google.cloud.asset.v1.MoveAnalysisResultH #
error (2.google.rpc.StatusH B
result"~
MoveAnalysisResult3
blockers (2!.google.cloud.asset.v1.MoveImpact3
warnings (2!.google.cloud.asset.v1.MoveImpact"

MoveImpact
detail (	"�
QueryAssetsOutputConfig`
bigquery_destination (2B.google.cloud.asset.v1.QueryAssetsOutputConfig.BigQueryDestinationZ
BigQueryDestination
dataset (	B�A
table (	B�A
write_disposition (	"�
QueryAssetsRequest7
parent (	B\'�A�A!cloudasset.googleapis.com/Asset
	statement (	B�AH 
job_reference (	B�AH 
	page_size (B�A

page_token (	B�A/
timeout (2.google.protobuf.DurationB�AB
read_time_window (2!.google.cloud.asset.v1.TimeWindowB�AH4
	read_time (2.google.protobuf.TimestampB�AHJ
output_config	 (2..google.cloud.asset.v1.QueryAssetsOutputConfigB�AB
queryB
time"�
QueryAssetsResponse
job_reference (	
done (#
error (2.google.rpc.StatusH :
query_result (2".google.cloud.asset.v1.QueryResultH G
output_config (2..google.cloud.asset.v1.QueryAssetsOutputConfigH B

response"�
QueryResult%
rows (2.google.protobuf.Struct2
schema (2".google.cloud.asset.v1.TableSchema
next_page_token (	

total_rows ("F
TableSchema7
fields (2\'.google.cloud.asset.v1.TableFieldSchema"v
TableFieldSchema
field (	
type (	
mode (	7
fields (2\'.google.cloud.asset.v1.TableFieldSchema"Y
#BatchGetEffectiveIamPoliciesRequest
scope (	B	�A�A*
names (	B	�A�A
*"�
$BatchGetEffectiveIamPoliciesResponsef
policy_results (2N.google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy�
EffectiveIamPolicy
full_resource_name (	k
policies (2Y.google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.PolicyInfoN

PolicyInfo
attached_resource (	%
policy (2.google.iam.v1.Policy"�
AnalyzerOrgPolicy
attached_resource (	
applied_resource (	<
rules (2-.google.cloud.asset.v1.AnalyzerOrgPolicy.Rule
inherit_from_parent (
reset (�
RuleL
values (2:.google.cloud.asset.v1.AnalyzerOrgPolicy.Rule.StringValuesH 
	allow_all (H 
deny_all (H 
enforce (H $
	condition (2.google.type.Expr=
StringValues
allowed_values (	
denied_values (	B
kind"�

AnalyzerOrgPolicyConstraintb
google_defined_constraint (2=.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint.ConstraintH `
custom_constraint (2C.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint.CustomConstraintH �

Constraint
name (	
display_name (	
description (	k
constraint_default (2O.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint.Constraint.ConstraintDefaultg
list_constraint (2L.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint.Constraint.ListConstraintH m
boolean_constraint (2O.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint.Constraint.BooleanConstraintH =
ListConstraint
supports_in (
supports_under (
BooleanConstraint"L
ConstraintDefault"
CONSTRAINT_DEFAULT_UNSPECIFIED 	
ALLOW
DENYB
constraint_type�
CustomConstraint
name (	
resource_types (	d
method_types (2N.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint.CustomConstraint.MethodType
	condition (	c
action_type (2N.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint.CustomConstraint.ActionType
display_name (	
description (	"M

MethodType
METHOD_TYPE_UNSPECIFIED 

CREATE

UPDATE

DELETE">

ActionType
ACTION_TYPE_UNSPECIFIED 	
ALLOW
DENYB
constraint_definition"�
AnalyzeOrgPoliciesRequest
scope (	B�A

constraint (	B�A
filter (	
	page_size (H �

page_token (	B

_page_size"�
AnalyzeOrgPoliciesResponse]
org_policy_results (2A.google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.OrgPolicyResultF

constraint (22.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint
next_page_token (	�
OrgPolicyResultE
consolidated_policy (2(.google.cloud.asset.v1.AnalyzerOrgPolicy?
policy_bundle (2(.google.cloud.asset.v1.AnalyzerOrgPolicy"�
)AnalyzeOrgPolicyGovernedContainersRequest
scope (	B�A

constraint (	B�A
filter (	
	page_size (H �

page_token (	B

_page_size"�
*AnalyzeOrgPolicyGovernedContainersResponsep
governed_containers (2S.google.cloud.asset.v1.AnalyzeOrgPolicyGovernedContainersResponse.GovernedContainerF

constraint (22.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint
next_page_token (	�
GovernedContainer
full_resource_name (	
parent (	E
consolidated_policy (2(.google.cloud.asset.v1.AnalyzerOrgPolicy?
policy_bundle (2(.google.cloud.asset.v1.AnalyzerOrgPolicy"�
%AnalyzeOrgPolicyGovernedAssetsRequest
scope (	B�A

constraint (	B�A
filter (	
	page_size (H �

page_token (	B

_page_size"�
&AnalyzeOrgPolicyGovernedAssetsResponsed
governed_assets (2K.google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.GovernedAssetF

constraint (22.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint
next_page_token (	v
GovernedResource
full_resource_name (	
parent (	
project (	
folders (	
organization (	�
GovernedIamPolicy
attached_resource (	%
policy (2.google.iam.v1.Policy
project (	
folders (	
organization (	�
GovernedAssetk
governed_resource (2N.google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.GovernedResourceH n
governed_iam_policy (2O.google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.GovernedIamPolicyH E
consolidated_policy (2(.google.cloud.asset.v1.AnalyzerOrgPolicy?
policy_bundle (2(.google.cloud.asset.v1.AnalyzerOrgPolicyB
governed_asset*�
ContentType
CONTENT_TYPE_UNSPECIFIED 
RESOURCE

IAM_POLICY

ORG_POLICY
ACCESS_POLICY
OS_INVENTORY
RELATIONSHIP2� 
AssetService�
ExportAssets*.google.cloud.asset.v1.ExportAssetsRequest.google.longrunning.Operation"��AW
*google.cloud.asset.v1.ExportAssetsResponse)google.cloud.asset.v1.ExportAssetsRequest���""/v1/{parent=*/*}:exportAssets:*�

ListAssets(.google.cloud.asset.v1.ListAssetsRequest).google.cloud.asset.v1.ListAssetsResponse"(�Aparent���/v1/{parent=*/*}/assets�
BatchGetAssetsHistory3.google.cloud.asset.v1.BatchGetAssetsHistoryRequest4.google.cloud.asset.v1.BatchGetAssetsHistoryResponse".���(&/v1/{parent=*/*}:batchGetAssetsHistory

CreateFeed(.google.cloud.asset.v1.CreateFeedRequest.google.cloud.asset.v1.Feed"*�Aparent���"/v1/{parent=*/*}/feeds:*t
GetFeed%.google.cloud.asset.v1.GetFeedRequest.google.cloud.asset.v1.Feed"%�Aname���/v1/{name=*/*/feeds/*}�
	ListFeeds\'.google.cloud.asset.v1.ListFeedsRequest(.google.cloud.asset.v1.ListFeedsResponse"\'�Aparent���/v1/{parent=*/*}/feeds�

UpdateFeed(.google.cloud.asset.v1.UpdateFeedRequest.google.cloud.asset.v1.Feed"-�Afeed��� 2/v1/{feed.name=*/*/feeds/*}:*u

DeleteFeed(.google.cloud.asset.v1.DeleteFeedRequest.google.protobuf.Empty"%�Aname���*/v1/{name=*/*/feeds/*}�
SearchAllResources0.google.cloud.asset.v1.SearchAllResourcesRequest1.google.cloud.asset.v1.SearchAllResourcesResponse"D�Ascope,query,asset_types���$"/v1/{scope=*/*}:searchAllResources�
SearchAllIamPolicies2.google.cloud.asset.v1.SearchAllIamPoliciesRequest3.google.cloud.asset.v1.SearchAllIamPoliciesResponse":�Ascope,query���&$/v1/{scope=*/*}:searchAllIamPolicies�
AnalyzeIamPolicy..google.cloud.asset.v1.AnalyzeIamPolicyRequest/.google.cloud.asset.v1.AnalyzeIamPolicyResponse"7���1//v1/{analysis_query.scope=*/*}:analyzeIamPolicy�
AnalyzeIamPolicyLongrunning9.google.cloud.asset.v1.AnalyzeIamPolicyLongrunningRequest.google.longrunning.Operation"��Av
9google.cloud.asset.v1.AnalyzeIamPolicyLongrunningResponse9google.cloud.asset.v1.AnalyzeIamPolicyLongrunningMetadata���?":/v1/{analysis_query.scope=*/*}:analyzeIamPolicyLongrunning:*�
AnalyzeMove).google.cloud.asset.v1.AnalyzeMoveRequest*.google.cloud.asset.v1.AnalyzeMoveResponse"&��� /v1/{resource=*/*}:analyzeMove�
QueryAssets).google.cloud.asset.v1.QueryAssetsRequest*.google.cloud.asset.v1.QueryAssetsResponse"\'���!"/v1/{parent=*/*}:queryAssets:*�
CreateSavedQuery..google.cloud.asset.v1.CreateSavedQueryRequest!.google.cloud.asset.v1.SavedQuery"V�A!parent,saved_query,saved_query_id���,"/v1/{parent=*/*}/savedQueries:saved_query�
GetSavedQuery+.google.cloud.asset.v1.GetSavedQueryRequest!.google.cloud.asset.v1.SavedQuery",�Aname���/v1/{name=*/*/savedQueries/*}�
ListSavedQueries..google.cloud.asset.v1.ListSavedQueriesRequest/.google.cloud.asset.v1.ListSavedQueriesResponse".�Aparent���/v1/{parent=*/*}/savedQueries�
UpdateSavedQuery..google.cloud.asset.v1.UpdateSavedQueryRequest!.google.cloud.asset.v1.SavedQuery"X�Asaved_query,update_mask���82)/v1/{saved_query.name=*/*/savedQueries/*}:saved_query�
DeleteSavedQuery..google.cloud.asset.v1.DeleteSavedQueryRequest.google.protobuf.Empty",�Aname���*/v1/{name=*/*/savedQueries/*}�
BatchGetEffectiveIamPolicies:.google.cloud.asset.v1.BatchGetEffectiveIamPoliciesRequest;.google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse"5���/-/v1/{scope=*/*}/effectiveIamPolicies:batchGet�
AnalyzeOrgPolicies0.google.cloud.asset.v1.AnalyzeOrgPoliciesRequest1.google.cloud.asset.v1.AnalyzeOrgPoliciesResponse"D�Ascope,constraint,filter���$"/v1/{scope=*/*}:analyzeOrgPolicies�
"AnalyzeOrgPolicyGovernedContainers@.google.cloud.asset.v1.AnalyzeOrgPolicyGovernedContainersRequestA.google.cloud.asset.v1.AnalyzeOrgPolicyGovernedContainersResponse"T�Ascope,constraint,filter���42/v1/{scope=*/*}:analyzeOrgPolicyGovernedContainers�
AnalyzeOrgPolicyGovernedAssets<.google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsRequest=.google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse"P�Ascope,constraint,filter���0./v1/{scope=*/*}:analyzeOrgPolicyGovernedAssetsM�Acloudasset.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.asset.v1BAssetServiceProtoPZ/cloud.google.com/go/asset/apiv1/assetpb;assetpb�Google.Cloud.Asset.V1�Google\\Cloud\\Asset\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

