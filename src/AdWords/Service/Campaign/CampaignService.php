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
namespace GAds\AdWords\Service\Campaign;

use GAds\AdWords\Lib\AdWordsSoapClient;
/**
 * CampaignService
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class CampaignService extends AdWordsSoapClient
{

	const SERVICE_NAME = "CampaignService";

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/CampaignService";

	/**
	 * The endpoint of the service
	 *
	 * @var string
	 */
	public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/CampaignService";

	/**
	 * Default class map for wsdl=>php
	 *
	 * @access private
	 * @var array
	 */
	public static $classmap = array(
		"AdxError" => "AdxError",
		"ApiError" => "ApiError",
		"ApiException" => "ApiException",
		"ApplicationException" => "ApplicationException",
		"LabelAttribute" => "LabelAttribute",
		"AuthenticationError" => "AuthenticationError",
		"AuthorizationError" => "AuthorizationError",
		"BiddingErrors" => "BiddingErrors",
		"BiddingScheme" => "BiddingScheme",
		"BiddingStrategyConfiguration" => "BiddingStrategyConfiguration",
		"Bids" => "Bids",
		"Budget" => "Budget",
		"BudgetError" => "BudgetError",
		"BudgetOptimizerBiddingScheme" => "BudgetOptimizerBiddingScheme",
		"Campaign" => "Campaign",
		"CampaignError" => "CampaignError",
		"CampaignLabel" => "CampaignLabel",
		"CampaignLabelOperation" => "CampaignLabelOperation",
		"CampaignLabelReturnValue" => "CampaignLabelReturnValue",
		"TextLabel" => "TextLabel",
		"DisplayAttribute" => "DisplayAttribute",
		"CampaignOperation" => "CampaignOperation",
		"CampaignPage" => "CampaignPage",
		"CampaignReturnValue" => "CampaignReturnValue",
		"ClientTermsError" => "ClientTermsError",
		"ComparableValue" => "ComparableValue",
		"ConversionOptimizerBiddingScheme" => "ConversionOptimizerBiddingScheme",
		"ConversionOptimizerEligibility" => "ConversionOptimizerEligibility",
		"CpaBid" => "CpaBid",
		"CpcBid" => "CpcBid",
		"CpmBid" => "CpmBid",
		"CustomParameter" => "CustomParameter",
		"CustomParameters" => "CustomParameters",
		"DatabaseError" => "DatabaseError",
		"DateError" => "DateError",
		"DateRange" => "DateRange",
		"DateRangeError" => "DateRangeError",
		"DistinctError" => "DistinctError",
		"DoubleValue" => "DoubleValue",
		"DynamicSearchAdsSetting" => "DynamicSearchAdsSetting",
		"EnhancedCpcBiddingScheme" => "EnhancedCpcBiddingScheme",
		"EntityAccessDenied" => "EntityAccessDenied",
		"EntityCountLimitExceeded" => "EntityCountLimitExceeded",
		"EntityNotFound" => "EntityNotFound",
		"ForwardCompatibilityError" => "ForwardCompatibilityError",
		"FrequencyCap" => "FrequencyCap",
		"GeoTargetTypeSetting" => "GeoTargetTypeSetting",
		"IdError" => "IdError",
		"InternalApiError" => "InternalApiError",
		"Label" => "Label",
		"ListReturnValue" => "ListReturnValue",
		"LongValue" => "LongValue",
		"ManualCpcBiddingScheme" => "ManualCpcBiddingScheme",
		"ManualCpmBiddingScheme" => "ManualCpmBiddingScheme",
		"Money" => "Money",
		"NetworkSetting" => "NetworkSetting",
		"NewEntityCreationError" => "NewEntityCreationError",
		"NotEmptyError" => "NotEmptyError",
		"NullError" => "NullError",
		"NumberValue" => "NumberValue",
		"Operation" => "Operation",
		"OperationAccessDenied" => "OperationAccessDenied",
		"OperatorError" => "OperatorError",
		"OrderBy" => "OrderBy",
		"Page" => "Page",
		"PageOnePromotedBiddingScheme" => "PageOnePromotedBiddingScheme",
		"Paging" => "Paging",
		"Predicate" => "Predicate",
		"QueryError" => "QueryError",
		"QuotaCheckError" => "QuotaCheckError",
		"RangeError" => "RangeError",
		"RateExceededError" => "RateExceededError",
		"ReadOnlyError" => "ReadOnlyError",
		"RealTimeBiddingSetting" => "RealTimeBiddingSetting",
		"RegionCodeError" => "RegionCodeError",
		"RejectedError" => "RejectedError",
		"RequestError" => "RequestError",
		"RequiredError" => "RequiredError",
		"Selector" => "Selector",
		"SelectorError" => "SelectorError",
		"Setting" => "Setting",
		"SettingError" => "SettingError",
		"ShoppingSetting" => "ShoppingSetting",
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
		"TrackingSetting" => "TrackingSetting",
		"UrlError" => "UrlError",
		"AdServingOptimizationStatus" => "AdServingOptimizationStatus",
		"AdvertisingChannelSubType" => "AdvertisingChannelSubType",
		"AdvertisingChannelType" => "AdvertisingChannelType",
		"AdxError.Reason" => "AdxErrorReason",
		"AuthenticationError.Reason" => "AuthenticationErrorReason",
		"AuthorizationError.Reason" => "AuthorizationErrorReason",
		"BidSource" => "BidSource",
		"BiddingErrors.Reason" => "BiddingErrorsReason",
		"BiddingStrategySource" => "BiddingStrategySource",
		"BiddingStrategyType" => "BiddingStrategyType",
		"Budget.BudgetDeliveryMethod" => "BudgetBudgetDeliveryMethod",
		"Budget.BudgetPeriod" => "BudgetBudgetPeriod",
		"Budget.BudgetStatus" => "BudgetBudgetStatus",
		"BudgetError.Reason" => "BudgetErrorReason",
		"CampaignError.Reason" => "CampaignErrorReason",
		"CampaignStatus" => "CampaignStatus",
		"ClientTermsError.Reason" => "ClientTermsErrorReason",
		"ConversionOptimizerBiddingScheme.BidType" => "ConversionOptimizerBiddingSchemeBidType",
		"ConversionOptimizerBiddingScheme.PricingMode" => "ConversionOptimizerBiddingSchemePricingMode",
		"ConversionOptimizerEligibility.RejectionReason" => "ConversionOptimizerEligibilityRejectionReason",
		"DatabaseError.Reason" => "DatabaseErrorReason",
		"DateError.Reason" => "DateErrorReason",
		"DateRangeError.Reason" => "DateRangeErrorReason",
		"DistinctError.Reason" => "DistinctErrorReason",
		"EntityAccessDenied.Reason" => "EntityAccessDeniedReason",
		"EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
		"EntityNotFound.Reason" => "EntityNotFoundReason",
		"ForwardCompatibilityError.Reason" => "ForwardCompatibilityErrorReason",
		"GeoTargetTypeSetting.NegativeGeoTargetType" => "GeoTargetTypeSettingNegativeGeoTargetType",
		"GeoTargetTypeSetting.PositiveGeoTargetType" => "GeoTargetTypeSettingPositiveGeoTargetType",
		"IdError.Reason" => "IdErrorReason",
		"InternalApiError.Reason" => "InternalApiErrorReason",
		"Label.Status" => "LabelStatus",
		"Level" => "Level",
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
		"RegionCodeError.Reason" => "RegionCodeErrorReason",
		"RejectedError.Reason" => "RejectedErrorReason",
		"RequestError.Reason" => "RequestErrorReason",
		"RequiredError.Reason" => "RequiredErrorReason",
		"SelectorError.Reason" => "SelectorErrorReason",
		"ServingStatus" => "ServingStatus",
		"SettingError.Reason" => "SettingErrorReason",
		"SizeLimitError.Reason" => "SizeLimitErrorReason",
		"SortOrder" => "SortOrder",
		"StatsQueryError.Reason" => "StatsQueryErrorReason",
		"StringFormatError.Reason" => "StringFormatErrorReason",
		"StringLengthError.Reason" => "StringLengthErrorReason",
		"TimeUnit" => "TimeUnit",
		"UrlError.Reason" => "UrlErrorReason",
		"get" => "CampaignServiceGet",
		"getResponse" => "CampaignServiceGetResponse",
		"mutate" => "CampaignServiceMutate",
		"mutateResponse" => "CampaignServiceMutateResponse",
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
	 * Returns the list of campaigns that meet the selector criteria.
	 *
	 * @param serviceSelector the selector specifying the {@link Campaign}s to return.
	 * @return A list of campaigns.
	 * @throws ApiException if problems occurred while fetching campaign information.
	 */
	public function get($serviceSelector)
	{
		$args = new CampaignServiceGet($serviceSelector);
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
	 * Adds, updates, or removes campaigns.
	 * <p class="note"><b>Note:</b> {@link CampaignOperation} does not support the
	 * <code>REMOVE</code> operator. To remove a campaign, set its
	 * {@link Campaign#status status} to {@code REMOVED}.</p>
	 *
	 * @param operations A list of unique operations.
	 *        The same campaign cannot be specified in more than one operation.
	 * @return The list of updated campaigns, returned in the same order as the
	 *         <code>operations</code> array.
	 * @throws ApiException if problems occurred while updating campaign information.
	 */
	public function mutate($operations)
	{
		$args = new CampaignServiceMutate($operations);
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
	 *
	 *
	 * Adds labels to the {@linkplain Campaign campaign} or removes
	 * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}s from the
	 * {@linkplain Campaign campaign}.
	 * <p>Add - Apply an existing label to an existing
	 * {@linkplain Campaign campaign}. The {@code campaignId} must reference an existing
	 * {@linkplain Campaign}. The {@code labelId} must reference an existing
	 * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
	 * <p>Remove - Removes the link between the specified
	 * {@linkplain Campaign campaign} and
	 * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
	 *
	 * @param operations the operations to apply.
	 * @return a list of {@linkplain CampaignLabel}s where each entry in the list is the result of
	 *         applying the operation in the input list with the same index. For an
	 *         add operation, the returned CampaignLabel contains the CampaignId and the LabelId.
	 *         In the case of a remove operation, the returned CampaignLabel will only have CampaignId.
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
	 *
	 *
	 * Returns the list of campaigns that match the query.
	 *
	 * @param query The SQL-like AWQL query string.
	 * @return A list of campaigns.
	 * @throws ApiException if problems occur while parsing the query or fetching campaign
	 *         information.
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
