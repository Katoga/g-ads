<?php
/**
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace GAds\AdWords\Service\CampaignCriterion;

/**
 * CampaignCriterionService
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class CampaignCriterionService extends AdWordsSoapClient
{

	const SERVICE_NAME = "CampaignCriterionService";

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/CampaignCriterionService";

	/**
	 * The endpoint of the service
	 *
	 * @var string
	 */
	public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/CampaignCriterionService";

	/**
	 * Default class map for wsdl=>php
	 *
	 * @access private
	 * @var array
	 */
	public static $classmap = array(
		"AdSchedule" => "AdSchedule",
		"Address" => "Address",
		"AdxError" => "AdxError",
		"AgeRange" => "AgeRange",
		"ApiError" => "ApiError",
		"ApiException" => "ApiException",
		"ApplicationException" => "ApplicationException",
		"AuthenticationError" => "AuthenticationError",
		"AuthorizationError" => "AuthorizationError",
		"CampaignCriterion" => "CampaignCriterion",
		"CampaignCriterionError" => "CampaignCriterionError",
		"CampaignCriterionOperation" => "CampaignCriterionOperation",
		"CampaignCriterionPage" => "CampaignCriterionPage",
		"CampaignCriterionReturnValue" => "CampaignCriterionReturnValue",
		"Carrier" => "Carrier",
		"ClientTermsError" => "ClientTermsError",
		"ConstantOperand" => "ConstantOperand",
		"ContentLabel" => "ContentLabel",
		"Criterion" => "Criterion",
		"CriterionError" => "CriterionError",
		"CriterionParameter" => "CriterionParameter",
		"DatabaseError" => "DatabaseError",
		"DateRange" => "DateRange",
		"DistinctError" => "DistinctError",
		"EntityCountLimitExceeded" => "EntityCountLimitExceeded",
		"EntityNotFound" => "EntityNotFound",
		"Function" => "FeedFunction",
		"FunctionError" => "FunctionError",
		"Gender" => "Gender",
		"GeoPoint" => "GeoPoint",
		"GeoTargetOperand" => "GeoTargetOperand",
		"IdError" => "IdError",
		"IncomeOperand" => "IncomeOperand",
		"InternalApiError" => "InternalApiError",
		"IpBlock" => "IpBlock",
		"Keyword" => "Keyword",
		"Language" => "Language",
		"ListReturnValue" => "ListReturnValue",
		"Location" => "Location",
		"LocationExtensionOperand" => "LocationExtensionOperand",
		"MobileAppCategory" => "MobileAppCategory",
		"MobileApplication" => "MobileApplication",
		"MobileDevice" => "MobileDevice",
		"NegativeCampaignCriterion" => "NegativeCampaignCriterion",
		"NewEntityCreationError" => "NewEntityCreationError",
		"NotEmptyError" => "NotEmptyError",
		"NullError" => "NullError",
		"FunctionArgumentOperand" => "FunctionArgumentOperand",
		"OperatingSystemVersion" => "OperatingSystemVersion",
		"Operation" => "Operation",
		"OperationAccessDenied" => "OperationAccessDenied",
		"OperatorError" => "OperatorError",
		"OrderBy" => "OrderBy",
		"Page" => "Page",
		"Paging" => "Paging",
		"PagingError" => "PagingError",
		"Placement" => "Placement",
		"PlacesOfInterestOperand" => "PlacesOfInterestOperand",
		"Platform" => "Platform",
		"Predicate" => "Predicate",
		"ProductAdwordsGrouping" => "ProductAdwordsGrouping",
		"ProductAdwordsLabels" => "ProductAdwordsLabels",
		"ProductBiddingCategory" => "ProductBiddingCategory",
		"ProductBrand" => "ProductBrand",
		"ProductCanonicalCondition" => "ProductCanonicalCondition",
		"ProductChannel" => "ProductChannel",
		"ProductChannelExclusivity" => "ProductChannelExclusivity",
		"ProductLegacyCondition" => "ProductLegacyCondition",
		"ProductCustomAttribute" => "ProductCustomAttribute",
		"ProductDimension" => "ProductDimension",
		"ProductOfferId" => "ProductOfferId",
		"ProductScope" => "ProductScope",
		"ProductType" => "ProductType",
		"ProductTypeFull" => "ProductTypeFull",
		"Proximity" => "Proximity",
		"QueryError" => "QueryError",
		"QuotaCheckError" => "QuotaCheckError",
		"RangeError" => "RangeError",
		"RateExceededError" => "RateExceededError",
		"ReadOnlyError" => "ReadOnlyError",
		"RegionCodeError" => "RegionCodeError",
		"RejectedError" => "RejectedError",
		"RequestError" => "RequestError",
		"RequiredError" => "RequiredError",
		"Selector" => "Selector",
		"SelectorError" => "SelectorError",
		"LocationGroups" => "LocationGroups",
		"SizeLimitError" => "SizeLimitError",
		"SoapHeader" => "SoapRequestHeader",
		"SoapResponseHeader" => "SoapResponseHeader",
		"StringLengthError" => "StringLengthError",
		"String_StringMapEntry" => "String_StringMapEntry",
		"UnknownProductDimension" => "UnknownProductDimension",
		"CriterionUserInterest" => "CriterionUserInterest",
		"CriterionUserList" => "CriterionUserList",
		"Vertical" => "Vertical",
		"Webpage" => "Webpage",
		"WebpageCondition" => "WebpageCondition",
		"WebpageParameter" => "WebpageParameter",
		"YouTubeChannel" => "YouTubeChannel",
		"YouTubeVideo" => "YouTubeVideo",
		"AdxError.Reason" => "AdxErrorReason",
		"AgeRange.AgeRangeType" => "AgeRangeAgeRangeType",
		"AuthenticationError.Reason" => "AuthenticationErrorReason",
		"AuthorizationError.Reason" => "AuthorizationErrorReason",
		"CampaignCriterionError.Reason" => "CampaignCriterionErrorReason",
		"ClientTermsError.Reason" => "ClientTermsErrorReason",
		"ConstantOperand.ConstantType" => "ConstantOperandConstantType",
		"ConstantOperand.Unit" => "ConstantOperandUnit",
		"ContentLabelType" => "ContentLabelType",
		"Criterion.Type" => "CriterionType",
		"CriterionError.Reason" => "CriterionErrorReason",
		"DatabaseError.Reason" => "DatabaseErrorReason",
		"DayOfWeek" => "DayOfWeek",
		"DistinctError.Reason" => "DistinctErrorReason",
		"EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
		"EntityNotFound.Reason" => "EntityNotFoundReason",
		"Function.Operator" => "FunctionOperator",
		"FunctionError.Reason" => "FunctionErrorReason",
		"Gender.GenderType" => "GenderGenderType",
		"IdError.Reason" => "IdErrorReason",
		"IncomeTier" => "IncomeTier",
		"InternalApiError.Reason" => "InternalApiErrorReason",
		"KeywordMatchType" => "KeywordMatchType",
		"LocationTargetingStatus" => "LocationTargetingStatus",
		"MinuteOfHour" => "MinuteOfHour",
		"MobileDevice.DeviceType" => "MobileDeviceDeviceType",
		"NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
		"NotEmptyError.Reason" => "NotEmptyErrorReason",
		"NullError.Reason" => "NullErrorReason",
		"OperatingSystemVersion.OperatorType" => "OperatingSystemVersionOperatorType",
		"OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
		"Operator" => "Operator",
		"OperatorError.Reason" => "OperatorErrorReason",
		"PagingError.Reason" => "PagingErrorReason",
		"PlacesOfInterestOperand.Category" => "PlacesOfInterestOperandCategory",
		"Predicate.Operator" => "PredicateOperator",
		"ProductCanonicalCondition.Condition" => "ProductCanonicalConditionCondition",
		"ProductDimensionType" => "ProductDimensionType",
		"Proximity.DistanceUnits" => "ProximityDistanceUnits",
		"QueryError.Reason" => "QueryErrorReason",
		"QuotaCheckError.Reason" => "QuotaCheckErrorReason",
		"RangeError.Reason" => "RangeErrorReason",
		"RateExceededError.Reason" => "RateExceededErrorReason",
		"ReadOnlyError.Reason" => "ReadOnlyErrorReason",
		"RegionCodeError.Reason" => "RegionCodeErrorReason",
		"RejectedError.Reason" => "RejectedErrorReason",
		"RequestError.Reason" => "RequestErrorReason",
		"RequiredError.Reason" => "RequiredErrorReason",
		"SelectorError.Reason" => "SelectorErrorReason",
		"ShoppingProductChannel" => "ShoppingProductChannel",
		"ShoppingProductChannelExclusivity" => "ShoppingProductChannelExclusivity",
		"SizeLimitError.Reason" => "SizeLimitErrorReason",
		"SortOrder" => "SortOrder",
		"StringLengthError.Reason" => "StringLengthErrorReason",
		"CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
		"WebpageConditionOperand" => "WebpageConditionOperand",
		"get" => "CampaignCriterionServiceGet",
		"getResponse" => "CampaignCriterionServiceGetResponse",
		"mutate" => "CampaignCriterionServiceMutate",
		"mutateResponse" => "CampaignCriterionServiceMutateResponse",
		"query" => "Query",
		"queryResponse" => "QueryResponse"
	);

	/**
	 * Constructor using wsdl location and options array
	 *
	 * @param string $wsdl WSDL location for this service
	 * @param array $options Options for the SoapClient
	 */
	public function __construct($wsdl, $options, $user)
	{
		$options["classmap"] = self::$classmap;
		parent::__construct($wsdl, $options, $user, self::SERVICE_NAME, self::WSDL_NAMESPACE);
	}

	/**
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 *
	 * Gets campaign criteria.
	 *
	 * @param serviceSelector The selector specifying the {@link CampaignCriterion}s to return.
	 * @return A list of campaign criteria.
	 * @throws ApiException when there is at least one error with the request.
	 */
	public function get($serviceSelector)
	{
		$args = new CampaignCriterionServiceGet($serviceSelector);
		$result = $this->__soapCall("get", array(
			$args
		));
		return $result->rval;
	}

	/**
	 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
	 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
	 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE, SET.</span>
	 *
	 * Adds, removes or updates campaign criteria.
	 *
	 * @param operations The operations to apply.
	 * @return The added campaign criteria (without any optional parts).
	 * @throws ApiException when there is at least one error with the request.
	 */
	public function mutate($operations)
	{
		$args = new CampaignCriterionServiceMutate($operations);
		$result = $this->__soapCall("mutate", array(
			$args
		));
		return $result->rval;
	}

	/**
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 *
	 * Returns the list of campaign criteria that match the query.
	 *
	 * @param query The SQL-like AWQL query string.
	 * @return A list of campaign criteria.
	 * @throws ApiException if problems occur while parsing the query or fetching campaign criteria.
	 */
	public function query($query)
	{
		$args = new Query($query);
		$result = $this->__soapCall("query", array(
			$args
		));
		return $result->rval;
	}
}
