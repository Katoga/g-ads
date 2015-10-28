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
namespace GAds\AdWords\Service\AdGroupFeed;

use GAds\AdWords\Lib\AdWordsSoapClient;

/**
 * AdGroupFeedService
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdGroupFeedService extends AdWordsSoapClient
{

	const SERVICE_NAME = "AdGroupFeedService";

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/AdGroupFeedService";

	/**
	 * The endpoint of the service
	 *
	 * @var string
	 */
	public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/AdGroupFeedService";

	/**
	 * Default class map for wsdl=>php
	 *
	 * @access private
	 * @var array
	 */
	public static $classmap = array(
		"AdGroupFeed" => "AdGroupFeed",
		"AdGroupFeedError" => "AdGroupFeedError",
		"AdGroupFeedOperation" => "AdGroupFeedOperation",
		"AdGroupFeedPage" => "AdGroupFeedPage",
		"AdGroupFeedReturnValue" => "AdGroupFeedReturnValue",
		"ApiError" => "ApiError",
		"ApiException" => "ApiException",
		"ApplicationException" => "ApplicationException",
		"AuthenticationError" => "AuthenticationError",
		"AuthorizationError" => "AuthorizationError",
		"ClientTermsError" => "ClientTermsError",
		"CollectionSizeError" => "CollectionSizeError",
		"ConstantOperand" => "ConstantOperand",
		"DatabaseError" => "DatabaseError",
		"DateRange" => "DateRange",
		"DistinctError" => "DistinctError",
		"EntityCountLimitExceeded" => "EntityCountLimitExceeded",
		"EntityNotFound" => "EntityNotFound",
		"FeedAttributeOperand" => "FeedAttributeOperand",
		"Function" => "FeedFunction",
		"FunctionError" => "FunctionError",
		"FunctionOperand" => "FunctionOperand",
		"IdError" => "IdError",
		"InternalApiError" => "InternalApiError",
		"ListReturnValue" => "ListReturnValue",
		"NotEmptyError" => "NotEmptyError",
		"NullError" => "NullError",
		"NullStatsPage" => "NullStatsPage",
		"FunctionArgumentOperand" => "FunctionArgumentOperand",
		"Operation" => "Operation",
		"OperationAccessDenied" => "OperationAccessDenied",
		"OrderBy" => "OrderBy",
		"Page" => "Page",
		"Paging" => "Paging",
		"Predicate" => "Predicate",
		"QueryError" => "QueryError",
		"QuotaCheckError" => "QuotaCheckError",
		"RangeError" => "RangeError",
		"RateExceededError" => "RateExceededError",
		"ReadOnlyError" => "ReadOnlyError",
		"RejectedError" => "RejectedError",
		"RequestContextOperand" => "RequestContextOperand",
		"RequestError" => "RequestError",
		"RequiredError" => "RequiredError",
		"Selector" => "Selector",
		"SelectorError" => "SelectorError",
		"SizeLimitError" => "SizeLimitError",
		"SoapHeader" => "SoapRequestHeader",
		"SoapResponseHeader" => "SoapResponseHeader",
		"StringLengthError" => "StringLengthError",
		"AdGroupFeed.Status" => "AdGroupFeedStatus",
		"AdGroupFeedError.Reason" => "AdGroupFeedErrorReason",
		"AuthenticationError.Reason" => "AuthenticationErrorReason",
		"AuthorizationError.Reason" => "AuthorizationErrorReason",
		"ClientTermsError.Reason" => "ClientTermsErrorReason",
		"CollectionSizeError.Reason" => "CollectionSizeErrorReason",
		"ConstantOperand.ConstantType" => "ConstantOperandConstantType",
		"ConstantOperand.Unit" => "ConstantOperandUnit",
		"DatabaseError.Reason" => "DatabaseErrorReason",
		"DistinctError.Reason" => "DistinctErrorReason",
		"EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
		"EntityNotFound.Reason" => "EntityNotFoundReason",
		"Function.Operator" => "FunctionOperator",
		"FunctionError.Reason" => "FunctionErrorReason",
		"IdError.Reason" => "IdErrorReason",
		"InternalApiError.Reason" => "InternalApiErrorReason",
		"NotEmptyError.Reason" => "NotEmptyErrorReason",
		"NullError.Reason" => "NullErrorReason",
		"OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
		"Operator" => "Operator",
		"Predicate.Operator" => "PredicateOperator",
		"QueryError.Reason" => "QueryErrorReason",
		"QuotaCheckError.Reason" => "QuotaCheckErrorReason",
		"RangeError.Reason" => "RangeErrorReason",
		"RateExceededError.Reason" => "RateExceededErrorReason",
		"ReadOnlyError.Reason" => "ReadOnlyErrorReason",
		"RejectedError.Reason" => "RejectedErrorReason",
		"RequestContextOperand.ContextType" => "RequestContextOperandContextType",
		"RequestError.Reason" => "RequestErrorReason",
		"RequiredError.Reason" => "RequiredErrorReason",
		"SelectorError.Reason" => "SelectorErrorReason",
		"SizeLimitError.Reason" => "SizeLimitErrorReason",
		"SortOrder" => "SortOrder",
		"StringLengthError.Reason" => "StringLengthErrorReason",
		"get" => "AdGroupFeedServiceGet",
		"getResponse" => "AdGroupFeedServiceGetResponse",
		"mutate" => "AdGroupFeedServiceMutate",
		"mutateResponse" => "AdGroupFeedServiceMutateResponse",
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
	 * Returns a list of AdGroupFeeds that meet the selector criteria.
	 *
	 * @param selector Determines which AdGroupFeeds to return. If empty all adgroup feeds are returned.
	 * @return The list of AdgroupFeeds.
	 * @throws ApiException Indicates a problem with the request.
	 */
	public function get($selector)
	{
		$args = new AdGroupFeedServiceGet($selector);
		$result = $this->__soapCall("get", array(
			$args
		));
		return $result->rval;
	}

	/**
	 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
	 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 *
	 * Adds, updates or removes AdGroupFeeds.
	 *
	 * @param operations The operations to apply.
	 * @return The resulting Feeds.
	 * @throws ApiException Indicates a problem with the request.
	 */
	public function mutate($operations)
	{
		$args = new AdGroupFeedServiceMutate($operations);
		$result = $this->__soapCall("mutate", array(
			$args
		));
		return $result->rval;
	}

	/**
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 *
	 * Returns the list of AdGroupFeeds that match the query.
	 *
	 * @param query The SQL-like AWQL query string.
	 * @return s A list of AdGroupFeed.
	 * @throws ApiException if problems occur while parsing the query or fetching AdGroupFeed.
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
