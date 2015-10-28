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
namespace GAds\AdWords\Service\AdGroupExtensionSetting;

use GAds\AdWords\Lib\AdWordsSoapClient;

/**
 * AdGroupExtensionSettingService
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdGroupExtensionSettingService extends AdWordsSoapClient
{

	const SERVICE_NAME = "AdGroupExtensionSettingService";

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/AdGroupExtensionSettingService";

	/**
	 * The endpoint of the service
	 *
	 * @var string
	 */
	public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/AdGroupExtensionSettingService";

	/**
	 * Default class map for wsdl=>php
	 *
	 * @access private
	 * @var array
	 */
	public static $classmap = array(
		"AuthenticationError" => "AuthenticationError",
		"AuthorizationError" => "AuthorizationError",
		"CallConversionType" => "CallConversionType",
		"CallFeedItem" => "CallFeedItem",
		"CalloutFeedItem" => "CalloutFeedItem",
		"ClientTermsError" => "ClientTermsError",
		"CollectionSizeError" => "CollectionSizeError",
		"CustomParameter" => "CustomParameter",
		"DateError" => "DateError",
		"DateRange" => "DateRange",
		"DisapprovalReason" => "DisapprovalReason",
		"DistinctError" => "DistinctError",
		"EntityAccessDenied" => "EntityAccessDenied",
		"EntityCountLimitExceeded" => "EntityCountLimitExceeded",
		"EntityNotFound" => "EntityNotFound",
		"ExtensionSettingError" => "ExtensionSettingError",
		"FeedItemAttributeError" => "FeedItemAttributeError",
		"FeedItemDevicePreference" => "FeedItemDevicePreference",
		"FeedItemPolicyData" => "FeedItemPolicyData",
		"FeedItemSchedule" => "FeedItemSchedule",
		"FeedItemScheduling" => "FeedItemScheduling",
		"IdError" => "IdError",
		"InternalApiError" => "InternalApiError",
		"NotEmptyError" => "NotEmptyError",
		"NullError" => "NullError",
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
		"ReviewFeedItem" => "ReviewFeedItem",
		"SelectorError" => "SelectorError",
		"SizeLimitError" => "SizeLimitError",
		"SoapHeader" => "SoapRequestHeader",
		"SoapResponseHeader" => "SoapResponseHeader",
		"StringLengthError" => "StringLengthError",
		"StructuredSnippetFeedItem" => "StructuredSnippetFeedItem",
		"UrlError" => "UrlError",
		"UrlList" => "UrlList",
		"CustomParameters" => "CustomParameters",
		"DatabaseError" => "DatabaseError",
		"PolicyData" => "PolicyData",
		"SitelinkFeedItem" => "SitelinkFeedItem",
		"ApiError" => "ApiError",
		"ApiException" => "ApiException",
		"AppFeedItem" => "AppFeedItem",
		"ApplicationException" => "ApplicationException",
		"ExtensionFeedItem" => "ExtensionFeedItem",
		"ExtensionSetting" => "ExtensionSetting",
		"Selector" => "Selector",
		"AdGroupExtensionSetting" => "AdGroupExtensionSetting",
		"AdGroupExtensionSettingOperation" => "AdGroupExtensionSettingOperation",
		"AdGroupExtensionSettingPage" => "AdGroupExtensionSettingPage",
		"AdGroupExtensionSettingReturnValue" => "AdGroupExtensionSettingReturnValue",
		"ListReturnValue" => "ListReturnValue",
		"Operation" => "Operation",
		"Page" => "Page",
		"AppFeedItem.AppStore" => "AppFeedItemAppStore",
		"AuthenticationError.Reason" => "AuthenticationErrorReason",
		"AuthorizationError.Reason" => "AuthorizationErrorReason",
		"ClientTermsError.Reason" => "ClientTermsErrorReason",
		"CollectionSizeError.Reason" => "CollectionSizeErrorReason",
		"DatabaseError.Reason" => "DatabaseErrorReason",
		"DateError.Reason" => "DateErrorReason",
		"DayOfWeek" => "DayOfWeek",
		"DistinctError.Reason" => "DistinctErrorReason",
		"EntityAccessDenied.Reason" => "EntityAccessDeniedReason",
		"EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
		"EntityNotFound.Reason" => "EntityNotFoundReason",
		"ExtensionSetting.Platform" => "ExtensionSettingPlatform",
		"ExtensionSettingError.Reason" => "ExtensionSettingErrorReason",
		"FeedItem.Status" => "FeedItemStatus",
		"FeedItemApprovalStatus" => "FeedItemApprovalStatus",
		"FeedItemValidationStatus" => "FeedItemValidationStatus",
		"Feed.Type" => "FeedType",
		"IdError.Reason" => "IdErrorReason",
		"InternalApiError.Reason" => "InternalApiErrorReason",
		"MinuteOfHour" => "MinuteOfHour",
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
		"RequestError.Reason" => "RequestErrorReason",
		"RequiredError.Reason" => "RequiredErrorReason",
		"SelectorError.Reason" => "SelectorErrorReason",
		"SizeLimitError.Reason" => "SizeLimitErrorReason",
		"SortOrder" => "SortOrder",
		"StringLengthError.Reason" => "StringLengthErrorReason",
		"UrlError.Reason" => "UrlErrorReason",
		"get" => "AdGroupExtensionSettingServiceGet",
		"getResponse" => "AdGroupExtensionSettingServiceGetResponse",
		"mutate" => "AdGroupExtensionSettingServiceMutate",
		"mutateResponse" => "AdGroupExtensionSettingServiceMutateResponse",
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
	 * Returns a list of AdGroupExtensionSettings that meet the selector criteria.
	 *
	 * @param selector Determines which AdGroupExtensionSettings to return. If empty, all AdGroupExtensionSettings are returned.
	 * @return The list of AdGroupExtensionSettings specified by the selector.
	 * @throws ApiException Indicates a problem with the request.
	 */
	public function get($selector)
	{
		$args = new AdGroupExtensionSettingServiceGet($selector);
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
	 * Applies the list of mutate operations (add, remove, and set).
	 *
	 * <p> Beginning in v201509, add and set operations are treated identically.
	 * Performing an add operation on an ad group with an existing ExtensionSetting will cause the operation to be treated like a set operation.
	 * Performing a set operation on an ad group with no ExtensionSetting will cause the operation to be treated like an add operation.
	 *
	 * @param operations The operations to apply. The same {@link AdGroupExtensionSetting} cannot be specified in more than one operation.
	 * @return The changed {@link AdGroupExtensionSetting}s.
	 * @throws ApiException Indicates a problem with the request.
	 */
	public function mutate($operations)
	{
		$args = new AdGroupExtensionSettingServiceMutate($operations);
		$result = $this->__soapCall("mutate", array(
			$args
		));
		return $result->rval;
	}

	/**
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 *
	 * Returns a list of AdGroupExtensionSettings that match the query.
	 *
	 * @param query The SQL-like AWQL query string.
	 * @return The list of AdGroupExtensionSettings specified by the query.
	 * @throws ApiException Indicates a problem with the request.
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
