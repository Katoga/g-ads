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
namespace GAds\AdWords\Service\AdGroup;

use GAds\AdWords\Lib\AdWordsSoapClient;

/**
 * AdGroupService
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdGroupService extends AdWordsSoapClient
{

	const SERVICE_NAME = "AdGroupService";

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/AdGroupService";

	/**
	 * The endpoint of the service
	 *
	 * @var string
	 */
	public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/AdGroupService";

	/**
	 * Default class map for wsdl=>php
	 *
	 * @access private
	 * @var array
	 */
	public static $classmap = array(
		"AdGroupLabel" => "AdGroupLabel",
		"AdGroupLabelOperation" => "AdGroupLabelOperation",
		"AdGroupServiceError" => "AdGroupServiceError",
		"AdxError" => "AdxError",
		"AuthenticationError" => "AuthenticationError",
		"AuthorizationError" => "AuthorizationError",
		"BiddingErrors" => "BiddingErrors",
		"TextLabel" => "TextLabel",
		"DisplayAttribute" => "DisplayAttribute",
		"ClientTermsError" => "ClientTermsError",
		"ConversionOptimizerBiddingScheme" => "ConversionOptimizerBiddingScheme",
		"CustomParameter" => "CustomParameter",
		"DateError" => "DateError",
		"DateRange" => "DateRange",
		"DistinctError" => "DistinctError",
		"DoubleValue" => "DoubleValue",
		"EnhancedCpcBiddingScheme" => "EnhancedCpcBiddingScheme",
		"EntityAccessDenied" => "EntityAccessDenied",
		"EntityCountLimitExceeded" => "EntityCountLimitExceeded",
		"EntityNotFound" => "EntityNotFound",
		"ExperimentError" => "ExperimentError",
		"ExplorerAutoOptimizerSetting" => "ExplorerAutoOptimizerSetting",
		"ForwardCompatibilityError" => "ForwardCompatibilityError",
		"IdError" => "IdError",
		"InternalApiError" => "InternalApiError",
		"LongValue" => "LongValue",
		"ManualCpcBiddingScheme" => "ManualCpcBiddingScheme",
		"ManualCpmBiddingScheme" => "ManualCpmBiddingScheme",
		"Money" => "Money",
		"MultiplierError" => "MultiplierError",
		"NewEntityCreationError" => "NewEntityCreationError",
		"NotEmptyError" => "NotEmptyError",
		"NullError" => "NullError",
		"NumberValue" => "NumberValue",
		"OperationAccessDenied" => "OperationAccessDenied",
		"OperatorError" => "OperatorError",
		"OrderBy" => "OrderBy",
		"Paging" => "Paging",
		"Predicate" => "Predicate",
		"QueryError" => "QueryError",
		"QuotaCheckError" => "QuotaCheckError",
		"RangeError" => "RangeError",
		"RateExceededError" => "RateExceededError",
		"ReadOnlyError" => "ReadOnlyError",
		"RejectedError" => "RejectedError",
		"RequestError" => "RequestError",
		"RequiredError" => "RequiredError",
		"SelectorError" => "SelectorError",
		"SettingError" => "SettingError",
		"SizeLimitError" => "SizeLimitError",
		"SoapHeader" => "SoapRequestHeader",
		"SoapResponseHeader" => "SoapResponseHeader",
		"StatsQueryError" => "StatsQueryError",
		"StringFormatError" => "StringFormatError",
		"StringLengthError" => "StringLengthError",
		"String_StringMapEntry" => "String_StringMapEntry",
		"TargetingSettingDetail" => "TargetingSettingDetail",
		"TargetingSetting" => "TargetingSetting",
		"UrlError" => "UrlError",
		"ComparableValue" => "ComparableValue",
		"CpaBid" => "CpaBid",
		"CpcBid" => "CpcBid",
		"CpmBid" => "CpmBid",
		"CustomParameters" => "CustomParameters",
		"DatabaseError" => "DatabaseError",
		"PageOnePromotedBiddingScheme" => "PageOnePromotedBiddingScheme",
		"Setting" => "Setting",
		"TargetCpaBiddingScheme" => "TargetCpaBiddingScheme",
		"TargetOutrankShareBiddingScheme" => "TargetOutrankShareBiddingScheme",
		"TargetRoasBiddingScheme" => "TargetRoasBiddingScheme",
		"TargetSpendBiddingScheme" => "TargetSpendBiddingScheme",
		"ApiError" => "ApiError",
		"ApiException" => "ApiException",
		"ApplicationException" => "ApplicationException",
		"LabelAttribute" => "LabelAttribute",
		"Bid" => "Bid",
		"BidMultiplier" => "BidMultiplier",
		"Bids" => "Bids",
		"BudgetOptimizerBiddingScheme" => "BudgetOptimizerBiddingScheme",
		"Label" => "Label",
		"ManualCPCAdGroupExperimentBidMultipliers" => "ManualCPCAdGroupExperimentBidMultipliers",
		"ManualCPMAdGroupExperimentBidMultipliers" => "ManualCPMAdGroupExperimentBidMultipliers",
		"Selector" => "Selector",
		"AdGroupExperimentBidMultipliers" => "AdGroupExperimentBidMultipliers",
		"AdGroupExperimentData" => "AdGroupExperimentData",
		"AdGroupLabelReturnValue" => "AdGroupLabelReturnValue",
		"BiddingScheme" => "BiddingScheme",
		"BiddingStrategyConfiguration" => "BiddingStrategyConfiguration",
		"AdGroup" => "AdGroup",
		"AdGroupOperation" => "AdGroupOperation",
		"AdGroupPage" => "AdGroupPage",
		"AdGroupReturnValue" => "AdGroupReturnValue",
		"ListReturnValue" => "ListReturnValue",
		"Operation" => "Operation",
		"Page" => "Page",
		"AdGroupServiceError.Reason" => "AdGroupServiceErrorReason",
		"AdGroup.Status" => "AdGroupStatus",
		"AdxError.Reason" => "AdxErrorReason",
		"AuthenticationError.Reason" => "AuthenticationErrorReason",
		"AuthorizationError.Reason" => "AuthorizationErrorReason",
		"BidSource" => "BidSource",
		"BiddingErrors.Reason" => "BiddingErrorsReason",
		"BiddingStrategySource" => "BiddingStrategySource",
		"BiddingStrategyType" => "BiddingStrategyType",
		"ClientTermsError.Reason" => "ClientTermsErrorReason",
		"ConversionOptimizerBiddingScheme.BidType" => "ConversionOptimizerBiddingSchemeBidType",
		"ConversionOptimizerBiddingScheme.PricingMode" => "ConversionOptimizerBiddingSchemePricingMode",
		"CriterionTypeGroup" => "CriterionTypeGroup",
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
		"IdError.Reason" => "IdErrorReason",
		"InternalApiError.Reason" => "InternalApiErrorReason",
		"Label.Status" => "LabelStatus",
		"MultiplierError.Reason" => "MultiplierErrorReason",
		"NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
		"NotEmptyError.Reason" => "NotEmptyErrorReason",
		"NullError.Reason" => "NullErrorReason",
		"OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
		"Operator" => "Operator",
		"OperatorError.Reason" => "OperatorErrorReason",
		"PageOnePromotedBiddingScheme.StrategyGoal" => "PageOnePromotedBiddingSchemeStrategyGoal",
		"Predicate.Operator" => "PredicateOperator",
		"QueryError.Reason" => "QueryErrorReason",
		"QuotaCheckError.Reason" => "QuotaCheckErrorReason",
		"RangeError.Reason" => "RangeErrorReason",
		"RateExceededError.Reason" => "RateExceededErrorReason",
		"ReadOnlyError.Reason" => "ReadOnlyErrorReason",
		"RejectedError.Reason" => "RejectedErrorReason",
		"RequestError.Reason" => "RequestErrorReason",
		"RequiredError.Reason" => "RequiredErrorReason",
		"SelectorError.Reason" => "SelectorErrorReason",
		"SettingError.Reason" => "SettingErrorReason",
		"SizeLimitError.Reason" => "SizeLimitErrorReason",
		"SortOrder" => "SortOrder",
		"StatsQueryError.Reason" => "StatsQueryErrorReason",
		"StringFormatError.Reason" => "StringFormatErrorReason",
		"StringLengthError.Reason" => "StringLengthErrorReason",
		"UrlError.Reason" => "UrlErrorReason",
		"get" => "AdGroupServiceGet",
		"getResponse" => "AdGroupServiceGetResponse",
		"mutate" => "AdGroupServiceMutate",
		"mutateResponse" => "AdGroupServiceMutateResponse",
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
	 *
	 *
	 * Returns a list of all the ad groups specified by the selector
	 * from the target customer's account.
	 *
	 * @param serviceSelector The selector specifying the {@link AdGroup}s to return.
	 * @return List of adgroups identified by the selector.
	 * @throws ApiException when there is at least one error with the request.
	 */
	public function get($serviceSelector)
	{
		$args = new AdGroupServiceGet($serviceSelector);
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
	 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
	 *
	 *
	 *
	 * Adds, updates, or removes ad groups.
	 * <p class="note"><b>Note:</b> {@link AdGroupOperation} does not support the
	 * {@code REMOVE} operator. To remove an ad group, set its
	 * {@link AdGroup#status status} to {@code REMOVED}.</p>
	 *
	 * @param operations List of unique operations. The same ad group cannot be
	 *        specified in more than one operation.
	 * @return The updated adgroups.
	 */
	public function mutate($operations)
	{
		$args = new AdGroupServiceMutate($operations);
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
	 * Adds labels to the {@linkplain AdGroup ad group} or removes {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}s from the {@linkplain AdGroup ad group}.
	 * <p>Add - Apply an existing label to an existing {@linkplain AdGroup ad group}.
	 * The {@code adGroupId} must reference an existing {@linkplain AdGroup ad group}.
	 * The {@code labelId} must reference an existing {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.
	 * <p>Remove - Removes the link between the specified {@linkplain AdGroup ad group} and {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
	 *
	 * @param operations the operations to apply.
	 * @return a list of {@linkplain AdGroupLabel}s where each entry in the list is the result of
	 *         applying the operation in the input list with the same index. For an
	 *         add operation, the returned AdGroupLabel contains the AdGroupId and the LabelId.
	 *         In the case of a remove operation, the returned AdGroupLabel will only have AdGroupId.
	 * @throws ApiException when there are one or more errors with the request.
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
	 * Returns the list of ad groups that match the query.
	 *
	 * @param query The SQL-like AWQL query string
	 * @return A list of adgroups
	 * @throws ApiException
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
