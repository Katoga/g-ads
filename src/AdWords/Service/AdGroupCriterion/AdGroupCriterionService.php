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
namespace GAds\AdWords\Service\AdGroupCriterion;

use GAds\AdWords\Lib\AdWordsSoapClient;

/**
 * AdGroupCriterionService
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdGroupCriterionService extends AdWordsSoapClient
{

	const SERVICE_NAME = "AdGroupCriterionService";

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/AdGroupCriterionService";

	/**
	 * The endpoint of the service
	 *
	 * @var string
	 */
	public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/AdGroupCriterionService";

	/**
	 * Default class map for wsdl=>php
	 *
	 * @access private
	 * @var array
	 */
	public static $classmap = array(
		"AdGroupCriterion" => "AdGroupCriterion",
		"AdGroupCriterionError" => "AdGroupCriterionError",
		"AdGroupCriterionExperimentBidMultiplier" => "AdGroupCriterionExperimentBidMultiplier",
		"AdGroupCriterionLabel" => "AdGroupCriterionLabel",
		"AdGroupCriterionLabelOperation" => "AdGroupCriterionLabelOperation",
		"AdGroupCriterionLabelReturnValue" => "AdGroupCriterionLabelReturnValue",
		"AdGroupCriterionLimitExceeded" => "AdGroupCriterionLimitExceeded",
		"AdGroupCriterionOperation" => "AdGroupCriterionOperation",
		"AdGroupCriterionPage" => "AdGroupCriterionPage",
		"AdGroupCriterionReturnValue" => "AdGroupCriterionReturnValue",
		"AdxError" => "AdxError",
		"AgeRange" => "AgeRange",
		"ApiError" => "ApiError",
		"ApiException" => "ApiException",
		"AppPaymentModel" => "AppPaymentModel",
		"AppUrl" => "AppUrl",
		"AppUrlList" => "AppUrlList",
		"ApplicationException" => "ApplicationException",
		"LabelAttribute" => "LabelAttribute",
		"AuthenticationError" => "AuthenticationError",
		"AuthorizationError" => "AuthorizationError",
		"Bid" => "Bid",
		"BidMultiplier" => "BidMultiplier",
		"BiddableAdGroupCriterion" => "BiddableAdGroupCriterion",
		"BiddableAdGroupCriterionExperimentData" => "BiddableAdGroupCriterionExperimentData",
		"BiddingErrors" => "BiddingErrors",
		"BiddingScheme" => "BiddingScheme",
		"BiddingStrategyConfiguration" => "BiddingStrategyConfiguration",
		"Bids" => "Bids",
		"BudgetOptimizerBiddingScheme" => "BudgetOptimizerBiddingScheme",
		"TextLabel" => "TextLabel",
		"DisplayAttribute" => "DisplayAttribute",
		"ClientTermsError" => "ClientTermsError",
		"CollectionSizeError" => "CollectionSizeError",
		"ComparableValue" => "ComparableValue",
		"ConversionOptimizerBiddingScheme" => "ConversionOptimizerBiddingScheme",
		"CpaBid" => "CpaBid",
		"CpcBid" => "CpcBid",
		"CpmBid" => "CpmBid",
		"Criterion" => "Criterion",
		"CriterionError" => "CriterionError",
		"CriterionParameter" => "CriterionParameter",
		"CriterionPolicyError" => "CriterionPolicyError",
		"CustomParameter" => "CustomParameter",
		"CustomParameters" => "CustomParameters",
		"DatabaseError" => "DatabaseError",
		"DateError" => "DateError",
		"DateRange" => "DateRange",
		"DistinctError" => "DistinctError",
		"DoubleValue" => "DoubleValue",
		"EnhancedCpcBiddingScheme" => "EnhancedCpcBiddingScheme",
		"EntityAccessDenied" => "EntityAccessDenied",
		"EntityCountLimitExceeded" => "EntityCountLimitExceeded",
		"EntityNotFound" => "EntityNotFound",
		"ExemptionRequest" => "ExemptionRequest",
		"ExperimentError" => "ExperimentError",
		"ForwardCompatibilityError" => "ForwardCompatibilityError",
		"Gender" => "Gender",
		"IdError" => "IdError",
		"InternalApiError" => "InternalApiError",
		"Keyword" => "Keyword",
		"Label" => "Label",
		"ListReturnValue" => "ListReturnValue",
		"LongValue" => "LongValue",
		"ManualCPCAdGroupCriterionExperimentBidMultiplier" => "ManualCPCAdGroupCriterionExperimentBidMultiplier",
		"ManualCpcBiddingScheme" => "ManualCpcBiddingScheme",
		"ManualCpmBiddingScheme" => "ManualCpmBiddingScheme",
		"MobileAppCategory" => "MobileAppCategory",
		"MobileApplication" => "MobileApplication",
		"Money" => "Money",
		"MultiplierError" => "MultiplierError",
		"NegativeAdGroupCriterion" => "NegativeAdGroupCriterion",
		"NewEntityCreationError" => "NewEntityCreationError",
		"NotEmptyError" => "NotEmptyError",
		"NullError" => "NullError",
		"NumberValue" => "NumberValue",
		"Operation" => "Operation",
		"OperationAccessDenied" => "OperationAccessDenied",
		"OrderBy" => "OrderBy",
		"Page" => "Page",
		"PageOnePromotedBiddingScheme" => "PageOnePromotedBiddingScheme",
		"Paging" => "Paging",
		"PagingError" => "PagingError",
		"Placement" => "Placement",
		"PolicyViolationError" => "PolicyViolationError",
		"PolicyViolationError.Part" => "PolicyViolationErrorPart",
		"PolicyViolationKey" => "PolicyViolationKey",
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
		"ProductPartition" => "ProductPartition",
		"ProductType" => "ProductType",
		"ProductTypeFull" => "ProductTypeFull",
		"QualityInfo" => "QualityInfo",
		"QueryError" => "QueryError",
		"QuotaCheckError" => "QuotaCheckError",
		"RangeError" => "RangeError",
		"RateExceededError" => "RateExceededError",
		"ReadOnlyError" => "ReadOnlyError",
		"RejectedError" => "RejectedError",
		"RequestError" => "RequestError",
		"RequiredError" => "RequiredError",
		"Selector" => "Selector",
		"SelectorError" => "SelectorError",
		"SizeLimitError" => "SizeLimitError",
		"SoapHeader" => "SoapRequestHeader",
		"SoapResponseHeader" => "SoapResponseHeader",
		"StatsQueryError" => "StatsQueryError",
		"StringFormatError" => "StringFormatError",
		"StringLengthError" => "StringLengthError",
		"String_StringMapEntry" => "String_StringMapEntry",
		"TargetCpaBiddingScheme" => "TargetCpaBiddingScheme",
		"TargetOutrankShareBiddingScheme" => "TargetOutrankShareBiddingScheme",
		"TargetRoasBiddingScheme" => "TargetRoasBiddingScheme",
		"TargetSpendBiddingScheme" => "TargetSpendBiddingScheme",
		"UnknownProductDimension" => "UnknownProductDimension",
		"UrlError" => "UrlError",
		"UrlList" => "UrlList",
		"CriterionUserInterest" => "CriterionUserInterest",
		"CriterionUserList" => "CriterionUserList",
		"Vertical" => "Vertical",
		"Webpage" => "Webpage",
		"WebpageCondition" => "WebpageCondition",
		"WebpageParameter" => "WebpageParameter",
		"YouTubeChannel" => "YouTubeChannel",
		"YouTubeVideo" => "YouTubeVideo",
		"AdGroupCriterionError.Reason" => "AdGroupCriterionErrorReason",
		"AdGroupCriterionLimitExceeded.CriteriaLimitType" => "AdGroupCriterionLimitExceededCriteriaLimitType",
		"AdxError.Reason" => "AdxErrorReason",
		"AgeRange.AgeRangeType" => "AgeRangeAgeRangeType",
		"AppPaymentModel.AppPaymentModelType" => "AppPaymentModelAppPaymentModelType",
		"AppUrl.OsType" => "AppUrlOsType",
		"ApprovalStatus" => "ApprovalStatus",
		"AuthenticationError.Reason" => "AuthenticationErrorReason",
		"AuthorizationError.Reason" => "AuthorizationErrorReason",
		"BidSource" => "BidSource",
		"BiddingErrors.Reason" => "BiddingErrorsReason",
		"BiddingStrategySource" => "BiddingStrategySource",
		"BiddingStrategyType" => "BiddingStrategyType",
		"ClientTermsError.Reason" => "ClientTermsErrorReason",
		"CollectionSizeError.Reason" => "CollectionSizeErrorReason",
		"ConversionOptimizerBiddingScheme.BidType" => "ConversionOptimizerBiddingSchemeBidType",
		"ConversionOptimizerBiddingScheme.PricingMode" => "ConversionOptimizerBiddingSchemePricingMode",
		"Criterion.Type" => "CriterionType",
		"CriterionError.Reason" => "CriterionErrorReason",
		"CriterionUse" => "CriterionUse",
		"DatabaseError.Reason" => "DatabaseErrorReason",
		"DateError.Reason" => "DateErrorReason",
		"DistinctError.Reason" => "DistinctErrorReason",
		"EntityAccessDenied.Reason" => "EntityAccessDeniedReason",
		"EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
		"EntityNotFound.Reason" => "EntityNotFoundReason",
		"ExperimentDataStatus" => "ExperimentDataStatus",
		"ExperimentDeltaStatus" => "ExperimentDeltaStatus",
		"ExperimentError.Reason" => "ExperimentErrorReason",
		"ForwardCompatibilityError.Reason" => "ForwardCompatibilityErrorReason",
		"Gender.GenderType" => "GenderGenderType",
		"IdError.Reason" => "IdErrorReason",
		"InternalApiError.Reason" => "InternalApiErrorReason",
		"KeywordMatchType" => "KeywordMatchType",
		"Label.Status" => "LabelStatus",
		"MultiplierError.Reason" => "MultiplierErrorReason",
		"MultiplierSource" => "MultiplierSource",
		"NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
		"NotEmptyError.Reason" => "NotEmptyErrorReason",
		"NullError.Reason" => "NullErrorReason",
		"OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
		"Operator" => "Operator",
		"PageOnePromotedBiddingScheme.StrategyGoal" => "PageOnePromotedBiddingSchemeStrategyGoal",
		"PagingError.Reason" => "PagingErrorReason",
		"Predicate.Operator" => "PredicateOperator",
		"ProductCanonicalCondition.Condition" => "ProductCanonicalConditionCondition",
		"ProductDimensionType" => "ProductDimensionType",
		"ProductPartitionType" => "ProductPartitionType",
		"QueryError.Reason" => "QueryErrorReason",
		"QuotaCheckError.Reason" => "QuotaCheckErrorReason",
		"RangeError.Reason" => "RangeErrorReason",
		"RateExceededError.Reason" => "RateExceededErrorReason",
		"ReadOnlyError.Reason" => "ReadOnlyErrorReason",
		"RejectedError.Reason" => "RejectedErrorReason",
		"RequestError.Reason" => "RequestErrorReason",
		"RequiredError.Reason" => "RequiredErrorReason",
		"SelectorError.Reason" => "SelectorErrorReason",
		"ShoppingProductChannel" => "ShoppingProductChannel",
		"ShoppingProductChannelExclusivity" => "ShoppingProductChannelExclusivity",
		"SizeLimitError.Reason" => "SizeLimitErrorReason",
		"SortOrder" => "SortOrder",
		"StatsQueryError.Reason" => "StatsQueryErrorReason",
		"StringFormatError.Reason" => "StringFormatErrorReason",
		"StringLengthError.Reason" => "StringLengthErrorReason",
		"SystemServingStatus" => "SystemServingStatus",
		"UrlError.Reason" => "UrlErrorReason",
		"CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
		"UserStatus" => "UserStatus",
		"WebpageConditionOperand" => "WebpageConditionOperand",
		"get" => "AdGroupCriterionServiceGet",
		"getResponse" => "AdGroupCriterionServiceGetResponse",
		"mutate" => "AdGroupCriterionServiceMutate",
		"mutateResponse" => "AdGroupCriterionServiceMutateResponse",
		"mutateLabel" => "MutateLabel",
		"mutateLabelResponse" => "MutateLabelResponse",
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
	 * Gets adgroup criteria.
	 *
	 * @param serviceSelector filters the adgroup criteria to be returned.
	 * @return a page (subset) view of the criteria selected
	 * @throws ApiException when there is at least one error with the request
	 */
	public function get($serviceSelector)
	{
		$args = new AdGroupCriterionServiceGet($serviceSelector);
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
	 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
	 *
	 * Adds, removes or updates adgroup criteria.
	 *
	 * @param operations operations to do during checks on keywords to be added.
	 * @return added and updated adgroup criteria (without optional parts)
	 * @throws ApiException when there is at least one error with the request
	 */
	public function mutate($operations)
	{
		$args = new AdGroupCriterionServiceMutate($operations);
		$result = $this->__soapCall("mutate", array(
			$args
		));
		return $result->rval;
	}

	/**
	 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
	 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : ADD, REMOVE.</span>
	 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
	 *
	 * Adds labels to the AdGroupCriterion or removes labels from the AdGroupCriterion
	 * <p>Add - Apply an existing label to an existing {@linkplain AdGroupCriterion ad group criterion}.
	 * The {@code adGroupId} and {@code criterionId} must reference an existing {@linkplain AdGroupCriterion ad group criterion}.
	 * The {@code labelId} must reference an existing {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.
	 * <p>Remove - Removes the link between the specified {@linkplain AdGroupCriterion ad group criterion} and {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
	 *
	 * @param operations the operations to apply
	 * @return a list of AdGroupCriterionLabel where each entry in the list is the result of
	 *         applying the operation in the input list with the same index. For an
	 *         add operation, the returned AdGroupCriterionLabel contains the AdGroupId, CriterionId and the
	 *         LabelId. In the case of a remove operation, the returned AdGroupCriterionLabel will only have
	 *         AdGroupId and CriterionId.
	 * @throws ApiException when there are one or more errors with the request
	 */
	public function mutateLabel($operations)
	{
		$args = new MutateLabel($operations);
		$result = $this->__soapCall("mutateLabel", array(
			$args
		));
		return $result->rval;
	}

	/**
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 *
	 * Returns the list of AdGroupCriterion that match the query.
	 *
	 * @param query The SQL-like AWQL query string
	 * @return s A list of AdGroupCriterion
	 * @throws ApiException when the query is invalid or there are errors processing the request.
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
