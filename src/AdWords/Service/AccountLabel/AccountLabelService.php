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
namespace GAds\AdWords\Service\AccountLabel;

/**
 * AccountLabelService
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AccountLabelService extends AdWordsSoapClient
{

	const SERVICE_NAME = "AccountLabelService";

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201509";

	const ENDPOINT = "https://adwords.google.com/api/adwords/mcm/v201509/AccountLabelService";

	/**
	 * The endpoint of the service
	 *
	 * @var string
	 */
	public static $endpoint = "https://adwords.google.com/api/adwords/mcm/v201509/AccountLabelService";

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
		"Date" => "Date",
		"DateError" => "DateError",
		"DateRange" => "DateRange",
		"DistinctError" => "DistinctError",
		"IdError" => "IdError",
		"InternalApiError" => "InternalApiError",
		"NotEmptyError" => "NotEmptyError",
		"NullError" => "NullError",
		"OperationAccessDenied" => "OperationAccessDenied",
		"OperatorError" => "OperatorError",
		"OrderBy" => "OrderBy",
		"Paging" => "Paging",
		"Predicate" => "Predicate",
		"QuotaCheckError" => "QuotaCheckError",
		"RangeError" => "RangeError",
		"RateExceededError" => "RateExceededError",
		"ReadOnlyError" => "ReadOnlyError",
		"RegionCodeError" => "RegionCodeError",
		"RejectedError" => "RejectedError",
		"RequestError" => "RequestError",
		"RequiredError" => "RequiredError",
		"SelectorError" => "SelectorError",
		"SizeLimitError" => "SizeLimitError",
		"SoapHeader" => "SoapRequestHeader",
		"SoapResponseHeader" => "SoapResponseHeader",
		"StringFormatError" => "StringFormatError",
		"StringLengthError" => "StringLengthError",
		"DatabaseError" => "DatabaseError",
		"ApiError" => "ApiError",
		"ApiException" => "ApiException",
		"ApplicationException" => "ApplicationException",
		"Selector" => "Selector",
		"Operation" => "Operation",
		"AuthenticationError.Reason" => "AuthenticationErrorReason",
		"AuthorizationError.Reason" => "AuthorizationErrorReason",
		"ClientTermsError.Reason" => "ClientTermsErrorReason",
		"DatabaseError.Reason" => "DatabaseErrorReason",
		"DateError.Reason" => "DateErrorReason",
		"DistinctError.Reason" => "DistinctErrorReason",
		"IdError.Reason" => "IdErrorReason",
		"InternalApiError.Reason" => "InternalApiErrorReason",
		"NotEmptyError.Reason" => "NotEmptyErrorReason",
		"NullError.Reason" => "NullErrorReason",
		"OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
		"Operator" => "Operator",
		"OperatorError.Reason" => "OperatorErrorReason",
		"Predicate.Operator" => "PredicateOperator",
		"QuotaCheckError.Reason" => "QuotaCheckErrorReason",
		"RangeError.Reason" => "RangeErrorReason",
		"RateExceededError.Reason" => "RateExceededErrorReason",
		"ReadOnlyError.Reason" => "ReadOnlyErrorReason",
		"RegionCodeError.Reason" => "RegionCodeErrorReason",
		"RejectedError.Reason" => "RejectedErrorReason",
		"RequestError.Reason" => "RequestErrorReason",
		"RequiredError.Reason" => "RequiredErrorReason",
		"SelectorError.Reason" => "SelectorErrorReason",
		"SizeLimitError.Reason" => "SizeLimitErrorReason",
		"SortOrder" => "SortOrder",
		"StringFormatError.Reason" => "StringFormatErrorReason",
		"StringLengthError.Reason" => "StringLengthErrorReason",
		"CollectionSizeError" => "CollectionSizeError",
		"CurrencyCodeError" => "CurrencyCodeError",
		"LabelServiceError" => "LabelServiceError",
		"AccountLabel" => "AccountLabel",
		"AccountLabelOperation" => "AccountLabelOperation",
		"AccountLabelPage" => "AccountLabelPage",
		"AccountLabelReturnValue" => "AccountLabelReturnValue",
		"CollectionSizeError.Reason" => "CollectionSizeErrorReason",
		"CurrencyCodeError.Reason" => "CurrencyCodeErrorReason",
		"LabelServiceError.Reason" => "LabelServiceErrorReason",
		"get" => "AccountLabelServiceGet",
		"getResponse" => "AccountLabelServiceGetResponse",
		"mutate" => "AccountLabelServiceMutate",
		"mutateResponse" => "AccountLabelServiceMutateResponse"
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
	 * Returns a list of labels specified by the selector for the authenticated user.
	 *
	 * @param selector filters the list of labels to return
	 * @return response containing lists of labels that meet all the criteria of the selector
	 * @throws ApiException if a problem occurs fetching the information requested
	 */
	public function get($selector)
	{
		$args = new AccountLabelServiceGet($selector);
		$result = $this->__soapCall("get", array(
			$args
		));
		return $result->rval;
	}

	/**
	 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
	 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
	 *
	 * Possible actions:
	 * <ul>
	 * <li> Create a new label - create a new {@link Label} and call mutate with ADD operator
	 * <li> Edit the label name - set the appropriate fields in your {@linkplain Label} and call mutate with the SET operator. Null fields will be interpreted to mean "no change"
	 * <li> Delete the label - call mutate with REMOVE operator
	 * </ul>
	 *
	 * @param operations list of unique operations to be executed in a single transaction, in the order specified.
	 * @return the mutated labels, in the same order that they were in as the parameter
	 * @throws ApiException if problems occurs while modifying label information
	 */
	public function mutate($operations)
	{
		$args = new AccountLabelServiceMutate($operations);
		$result = $this->__soapCall("mutate", array(
			$args
		));
		return $result->rval;
	}
}
