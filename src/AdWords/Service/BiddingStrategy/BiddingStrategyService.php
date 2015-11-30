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
namespace GAds\AdWords\Service\BiddingStrategy;

/**
 * BiddingStrategyService
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class BiddingStrategyService extends AdWordsSoapClient
{

	const SERVICE_NAME = "BiddingStrategyService";

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/BiddingStrategyService";

	/**
	 * The endpoint of the service
	 *
	 * @var string
	 */
	public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/BiddingStrategyService";

	/**
	 * Default class map for wsdl=>php
	 *
	 * @access private
	 * @var array
	 */
	public static $classmap = array(
		"AdxError" => "AdxError",
		"AuthenticationError" => "AuthenticationError",
		"AuthorizationError" => "AuthorizationError",
		"BiddingErrors" => "BiddingErrors",
		"BiddingStrategyError" => "BiddingStrategyError",
		"ClientTermsError" => "ClientTermsError",
		"ConversionOptimizerBiddingScheme" => "ConversionOptimizerBiddingScheme",
		"DateError" => "DateError",
		"DateRange" => "DateRange",
		"DistinctError" => "DistinctError",
		"DoubleValue" => "DoubleValue",
		"EnhancedCpcBiddingScheme" => "EnhancedCpcBiddingScheme",
		"EntityCountLimitExceeded" => "EntityCountLimitExceeded",
		"EntityNotFound" => "EntityNotFound",
		"IdError" => "IdError",
		"InternalApiError" => "InternalApiError",
		"LongValue" => "LongValue",
		"ManualCpcBiddingScheme" => "ManualCpcBiddingScheme",
		"ManualCpmBiddingScheme" => "ManualCpmBiddingScheme",
		"Money" => "Money",
		"NewEntityCreationError" => "NewEntityCreationError",
		"NotEmptyError" => "NotEmptyError",
		"NullError" => "NullError",
		"NumberValue" => "NumberValue",
		"OperationAccessDenied" => "OperationAccessDenied",
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
		"SizeLimitError" => "SizeLimitError",
		"SoapHeader" => "SoapRequestHeader",
		"SoapResponseHeader" => "SoapResponseHeader",
		"StringLengthError" => "StringLengthError",
		"ComparableValue" => "ComparableValue",
		"DatabaseError" => "DatabaseError",
		"PageOnePromotedBiddingScheme" => "PageOnePromotedBiddingScheme",
		"TargetCpaBiddingScheme" => "TargetCpaBiddingScheme",
		"TargetOutrankShareBiddingScheme" => "TargetOutrankShareBiddingScheme",
		"TargetRoasBiddingScheme" => "TargetRoasBiddingScheme",
		"TargetSpendBiddingScheme" => "TargetSpendBiddingScheme",
		"ApiError" => "ApiError",
		"ApiException" => "ApiException",
		"ApplicationException" => "ApplicationException",
		"BudgetOptimizerBiddingScheme" => "BudgetOptimizerBiddingScheme",
		"Selector" => "Selector",
		"BiddingScheme" => "BiddingScheme",
		"SharedBiddingStrategy" => "SharedBiddingStrategy",
		"BiddingStrategyOperation" => "BiddingStrategyOperation",
		"BiddingStrategyPage" => "BiddingStrategyPage",
		"BiddingStrategyReturnValue" => "BiddingStrategyReturnValue",
		"ListReturnValue" => "ListReturnValue",
		"Operation" => "Operation",
		"Page" => "Page",
		"AdxError.Reason" => "AdxErrorReason",
		"AuthenticationError.Reason" => "AuthenticationErrorReason",
		"AuthorizationError.Reason" => "AuthorizationErrorReason",
		"BiddingErrors.Reason" => "BiddingErrorsReason",
		"SharedBiddingStrategy.BiddingStrategyStatus" => "SharedBiddingStrategyBiddingStrategyStatus",
		"BiddingStrategyError.Reason" => "BiddingStrategyErrorReason",
		"BiddingStrategyType" => "BiddingStrategyType",
		"ClientTermsError.Reason" => "ClientTermsErrorReason",
		"ConversionOptimizerBiddingScheme.BidType" => "ConversionOptimizerBiddingSchemeBidType",
		"ConversionOptimizerBiddingScheme.PricingMode" => "ConversionOptimizerBiddingSchemePricingMode",
		"DatabaseError.Reason" => "DatabaseErrorReason",
		"DateError.Reason" => "DateErrorReason",
		"DistinctError.Reason" => "DistinctErrorReason",
		"EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
		"EntityNotFound.Reason" => "EntityNotFoundReason",
		"IdError.Reason" => "IdErrorReason",
		"InternalApiError.Reason" => "InternalApiErrorReason",
		"NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
		"NotEmptyError.Reason" => "NotEmptyErrorReason",
		"NullError.Reason" => "NullErrorReason",
		"OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
		"Operator" => "Operator",
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
		"SizeLimitError.Reason" => "SizeLimitErrorReason",
		"SortOrder" => "SortOrder",
		"StringLengthError.Reason" => "StringLengthErrorReason",
		"get" => "BiddingStrategyServiceGet",
		"getResponse" => "BiddingStrategyServiceGetResponse",
		"mutate" => "BiddingStrategyServiceMutate",
		"mutateResponse" => "BiddingStrategyServiceMutateResponse",
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
	 * Returns a list of bidding strategies that match the selector.
	 *
	 * @return list of bidding strategies specified by the selector.
	 * @throws com.google.ads.api.services.common.error.ApiException if problems occurred while retrieving results.
	 */
	public function get($selector)
	{
		$args = new BiddingStrategyServiceGet($selector);
		$result = $this->__soapCall("get", array(
			$args
		));
		return $result->rval;
	}

	/**
	 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
	 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : ADD, SET, REMOVE.</span>
	 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 *
	 * Applies the list of mutate operations.
	 *
	 * @param operations the operations to apply
	 * @return the modified list of BiddingStrategy
	 * @throws ApiException
	 */
	public function mutate($operations)
	{
		$args = new BiddingStrategyServiceMutate($operations);
		$result = $this->__soapCall("mutate", array(
			$args
		));
		return $result->rval;
	}

	/**
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 *
	 * Returns a list of bidding strategies that match the query.
	 *
	 * @param query The SQL-like AWQL query string.
	 * @throws ApiException when there are one or more errors with the request.
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
