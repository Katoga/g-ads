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
namespace GAds\AdWords\Service\AdGroupBidModifier;

use GAds\AdWords\Lib\AdWordsSoapClient;

/**
 * AdGroupBidModifierService
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdGroupBidModifierService extends AdWordsSoapClient
{

	const SERVICE_NAME = "AdGroupBidModifierService";

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/AdGroupBidModifierService";

	/**
	 * The endpoint of the service
	 *
	 * @var string
	 */
	public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/AdGroupBidModifierService";

	/**
	 * Default class map for wsdl=>php
	 *
	 * @access private
	 * @var array
	 */
	public static $classmap = array(
		"AuthenticationError" => "AuthenticationError",
		"AuthorizationError" => "AuthorizationError",
		"ClientTermsError" => "ClientTermsError",
		"CriterionError" => "CriterionError",
		"DateRange" => "DateRange",
		"DistinctError" => "DistinctError",
		"EntityNotFound" => "EntityNotFound",
		"IdError" => "IdError",
		"InternalApiError" => "InternalApiError",
		"NewEntityCreationError" => "NewEntityCreationError",
		"NotEmptyError" => "NotEmptyError",
		"OperationAccessDenied" => "OperationAccessDenied",
		"OperatorError" => "OperatorError",
		"OrderBy" => "OrderBy",
		"Paging" => "Paging",
		"Platform" => "Platform",
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
		"DatabaseError" => "DatabaseError",
		"ApiError" => "ApiError",
		"ApiException" => "ApiException",
		"ApplicationException" => "ApplicationException",
		"Selector" => "Selector",
		"Criterion" => "Criterion",
		"AdGroupBidModifier" => "AdGroupBidModifier",
		"AdGroupBidModifierOperation" => "AdGroupBidModifierOperation",
		"AdGroupBidModifierPage" => "AdGroupBidModifierPage",
		"AdGroupBidModifierReturnValue" => "AdGroupBidModifierReturnValue",
		"ListReturnValue" => "ListReturnValue",
		"Operation" => "Operation",
		"Page" => "Page",
		"AuthenticationError.Reason" => "AuthenticationErrorReason",
		"AuthorizationError.Reason" => "AuthorizationErrorReason",
		"BidModifierSource" => "BidModifierSource",
		"ClientTermsError.Reason" => "ClientTermsErrorReason",
		"Criterion.Type" => "CriterionType",
		"CriterionError.Reason" => "CriterionErrorReason",
		"DatabaseError.Reason" => "DatabaseErrorReason",
		"DistinctError.Reason" => "DistinctErrorReason",
		"EntityNotFound.Reason" => "EntityNotFoundReason",
		"IdError.Reason" => "IdErrorReason",
		"InternalApiError.Reason" => "InternalApiErrorReason",
		"NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
		"NotEmptyError.Reason" => "NotEmptyErrorReason",
		"OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
		"Operator" => "Operator",
		"OperatorError.Reason" => "OperatorErrorReason",
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
		"get" => "AdGroupBidModifierServiceGet",
		"getResponse" => "AdGroupBidModifierServiceGetResponse",
		"mutate" => "AdGroupBidModifierServiceMutate",
		"mutateResponse" => "AdGroupBidModifierServiceMutateResponse",
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
	 * Gets ad group level criterion bid modifiers.
	 *
	 * @param selector The selector specifying the {@link AdGroupBidModifier}s to return.
	 * @return A list of ad group bid modifiers.
	 * @throws ApiException when there is at least one error with the request.
	 */
	public function get($selector)
	{
		$args = new AdGroupBidModifierServiceGet($selector);
		$result = $this->__soapCall("get", array(
			$args
		));
		return $result->rval;
	}

	/**
	 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
	 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE, SET.</span>
	 *
	 * Adds, removes or updates ad group bid modifier overrides.
	 *
	 * @param operations The operations to apply.
	 * @return The added ad group bid modifier overrides.
	 * @throws ApiException when there is at least one error with the request.
	 */
	public function mutate($operations)
	{
		$args = new AdGroupBidModifierServiceMutate($operations);
		$result = $this->__soapCall("mutate", array(
			$args
		));
		return $result->rval;
	}

	/**
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 *
	 * Returns a list of {@link AdGroupBidModifier}s that match the query.
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
