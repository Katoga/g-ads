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
namespace GAds\AdWords\Service\AdGroupAd;

use GAds\AdWords\Lib\AdWordsSoapClient;

/**
 * AdGroupAdService
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdGroupAdService extends AdWordsSoapClient
{

	const SERVICE_NAME = "AdGroupAdService";

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/AdGroupAdService";

	/**
	 * The endpoint of the service
	 *
	 * @var string
	 */
	public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/AdGroupAdService";

	/**
	 * Default class map for wsdl=>php
	 *
	 * @access private
	 * @var array
	 */
	public static $classmap = array(
		"Ad" => "Ad",
		"AdCustomizerError" => "AdCustomizerError",
		"AdError" => "AdError",
		"AdGroupAd" => "AdGroupAd",
		"AdGroupAdCountLimitExceeded" => "AdGroupAdCountLimitExceeded",
		"AdGroupAdError" => "AdGroupAdError",
		"AdGroupAdExperimentData" => "AdGroupAdExperimentData",
		"AdGroupAdLabel" => "AdGroupAdLabel",
		"AdGroupAdLabelOperation" => "AdGroupAdLabelOperation",
		"AdGroupAdLabelReturnValue" => "AdGroupAdLabelReturnValue",
		"AdGroupAdOperation" => "AdGroupAdOperation",
		"AdGroupAdPage" => "AdGroupAdPage",
		"AdGroupAdReturnValue" => "AdGroupAdReturnValue",
		"AdUnionId" => "AdUnionId",
		"AdUrlUpgrade" => "AdUrlUpgrade",
		"AdxError" => "AdxError",
		"ApiError" => "ApiError",
		"ApiException" => "ApiException",
		"AppUrl" => "AppUrl",
		"ApplicationException" => "ApplicationException",
		"LabelAttribute" => "LabelAttribute",
		"Audio" => "Audio",
		"AuthenticationError" => "AuthenticationError",
		"AuthorizationError" => "AuthorizationError",
		"CallOnlyAd" => "CallOnlyAd",
		"TextLabel" => "TextLabel",
		"DisplayAttribute" => "DisplayAttribute",
		"ClientTermsError" => "ClientTermsError",
		"CustomParameter" => "CustomParameter",
		"CustomParameters" => "CustomParameters",
		"DatabaseError" => "DatabaseError",
		"DateError" => "DateError",
		"DateRange" => "DateRange",
		"DeprecatedAd" => "DeprecatedAd",
		"Dimensions" => "Dimensions",
		"DistinctError" => "DistinctError",
		"EntityAccessDenied" => "EntityAccessDenied",
		"EntityCountLimitExceeded" => "EntityCountLimitExceeded",
		"EntityNotFound" => "EntityNotFound",
		"ExemptionRequest" => "ExemptionRequest",
		"ExperimentError" => "ExperimentError",
		"FeedAttributeReferenceError" => "FeedAttributeReferenceError",
		"ForwardCompatibilityError" => "ForwardCompatibilityError",
		"FunctionError" => "FunctionError",
		"FunctionParsingError" => "FunctionParsingError",
		"IdError" => "IdError",
		"Image" => "Image",
		"ImageAd" => "ImageAd",
		"ImageError" => "ImageError",
		"InternalApiError" => "InternalApiError",
		"Label" => "Label",
		"ListReturnValue" => "ListReturnValue",
		"Media" => "Media",
		"MediaBundle" => "MediaBundle",
		"MediaBundleError" => "MediaBundleError",
		"MediaError" => "MediaError",
		"Media_Size_DimensionsMapEntry" => "Media_Size_DimensionsMapEntry",
		"Media_Size_StringMapEntry" => "Media_Size_StringMapEntry",
		"NewEntityCreationError" => "NewEntityCreationError",
		"NotEmptyError" => "NotEmptyError",
		"NullError" => "NullError",
		"Operation" => "Operation",
		"OperationAccessDenied" => "OperationAccessDenied",
		"OperatorError" => "OperatorError",
		"OrderBy" => "OrderBy",
		"Page" => "Page",
		"Paging" => "Paging",
		"PagingError" => "PagingError",
		"PolicyViolationError" => "PolicyViolationError",
		"PolicyViolationError.Part" => "PolicyViolationErrorPart",
		"PolicyViolationKey" => "PolicyViolationKey",
		"Predicate" => "Predicate",
		"ProductAd" => "ProductAd",
		"QueryError" => "QueryError",
		"QuotaCheckError" => "QuotaCheckError",
		"RangeError" => "RangeError",
		"RateExceededError" => "RateExceededError",
		"ReadOnlyError" => "ReadOnlyError",
		"RejectedError" => "RejectedError",
		"RequestError" => "RequestError",
		"RequiredError" => "RequiredError",
		"RichMediaAd" => "RichMediaAd",
		"Selector" => "Selector",
		"SelectorError" => "SelectorError",
		"SizeLimitError" => "SizeLimitError",
		"SoapHeader" => "SoapRequestHeader",
		"SoapResponseHeader" => "SoapResponseHeader",
		"StatsQueryError" => "StatsQueryError",
		"StringLengthError" => "StringLengthError",
		"String_StringMapEntry" => "String_StringMapEntry",
		"TempAdUnionId" => "TempAdUnionId",
		"TemplateAd" => "TemplateAd",
		"TemplateElement" => "TemplateElement",
		"TemplateElementField" => "TemplateElementField",
		"TextAd" => "TextAd",
		"ThirdPartyRedirectAd" => "ThirdPartyRedirectAd",
		"UrlError" => "UrlError",
		"Video" => "Video",
		"DynamicSearchAd" => "DynamicSearchAd",
		"AdCustomizerError.Reason" => "AdCustomizerErrorReason",
		"AdError.Reason" => "AdErrorReason",
		"AdGroupAd.ApprovalStatus" => "AdGroupAdApprovalStatus",
		"AdGroupAd.Status" => "AdGroupAdStatus",
		"AdGroupAdError.Reason" => "AdGroupAdErrorReason",
		"AdxError.Reason" => "AdxErrorReason",
		"AppUrl.OsType" => "AppUrlOsType",
		"AuthenticationError.Reason" => "AuthenticationErrorReason",
		"AuthorizationError.Reason" => "AuthorizationErrorReason",
		"ClientTermsError.Reason" => "ClientTermsErrorReason",
		"DatabaseError.Reason" => "DatabaseErrorReason",
		"DateError.Reason" => "DateErrorReason",
		"DeprecatedAd.Type" => "DeprecatedAdType",
		"DistinctError.Reason" => "DistinctErrorReason",
		"EntityAccessDenied.Reason" => "EntityAccessDeniedReason",
		"EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
		"EntityNotFound.Reason" => "EntityNotFoundReason",
		"ExperimentDataStatus" => "ExperimentDataStatus",
		"ExperimentDeltaStatus" => "ExperimentDeltaStatus",
		"ExperimentError.Reason" => "ExperimentErrorReason",
		"FeedAttributeReferenceError.Reason" => "FeedAttributeReferenceErrorReason",
		"ForwardCompatibilityError.Reason" => "ForwardCompatibilityErrorReason",
		"FunctionError.Reason" => "FunctionErrorReason",
		"FunctionParsingError.Reason" => "FunctionParsingErrorReason",
		"IdError.Reason" => "IdErrorReason",
		"ImageError.Reason" => "ImageErrorReason",
		"InternalApiError.Reason" => "InternalApiErrorReason",
		"Label.Status" => "LabelStatus",
		"Media.MediaType" => "MediaMediaType",
		"Media.MimeType" => "MediaMimeType",
		"Media.Size" => "MediaSize",
		"MediaBundleError.Reason" => "MediaBundleErrorReason",
		"MediaError.Reason" => "MediaErrorReason",
		"NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
		"NotEmptyError.Reason" => "NotEmptyErrorReason",
		"NullError.Reason" => "NullErrorReason",
		"OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
		"Operator" => "Operator",
		"OperatorError.Reason" => "OperatorErrorReason",
		"PagingError.Reason" => "PagingErrorReason",
		"Predicate.Operator" => "PredicateOperator",
		"QueryError.Reason" => "QueryErrorReason",
		"QuotaCheckError.Reason" => "QuotaCheckErrorReason",
		"RangeError.Reason" => "RangeErrorReason",
		"RateExceededError.Reason" => "RateExceededErrorReason",
		"ReadOnlyError.Reason" => "ReadOnlyErrorReason",
		"RejectedError.Reason" => "RejectedErrorReason",
		"RequestError.Reason" => "RequestErrorReason",
		"RequiredError.Reason" => "RequiredErrorReason",
		"RichMediaAd.AdAttribute" => "RichMediaAdAdAttribute",
		"RichMediaAd.RichMediaAdType" => "RichMediaAdRichMediaAdType",
		"SelectorError.Reason" => "SelectorErrorReason",
		"SizeLimitError.Reason" => "SizeLimitErrorReason",
		"SortOrder" => "SortOrder",
		"StatsQueryError.Reason" => "StatsQueryErrorReason",
		"StringLengthError.Reason" => "StringLengthErrorReason",
		"TemplateElementField.Type" => "TemplateElementFieldType",
		"ThirdPartyRedirectAd.ExpandingDirection" => "ThirdPartyRedirectAdExpandingDirection",
		"UrlError.Reason" => "UrlErrorReason",
		"VideoType" => "VideoType",
		"get" => "AdGroupAdServiceGet",
		"getResponse" => "AdGroupAdServiceGetResponse",
		"mutate" => "AdGroupAdServiceMutate",
		"mutateResponse" => "AdGroupAdServiceMutateResponse",
		"mutateLabel" => "MutateLabel",
		"mutateLabelResponse" => "MutateLabelResponse",
		"query" => "Query",
		"queryResponse" => "QueryResponse",
		"upgradeUrl" => "UpgradeUrl",
		"upgradeUrlResponse" => "UpgradeUrlResponse"
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
	 * Returns a list of AdGroupAds.
	 * AdGroupAds that had been removed are not returned by default.
	 *
	 * @param serviceSelector The selector specifying the {@link AdGroupAd}s to return.
	 * @return The page containing the AdGroupAds that meet the criteria specified by the selector.
	 * @throws ApiException when there is at least one error with the request.
	 */
	public function get($serviceSelector)
	{
		$args = new AdGroupAdServiceGet($serviceSelector);
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
	 *
	 *
	 *
	 * Applies the list of mutate operations (ie. add, set, remove):
	 * <p>Add - Creates a new {@linkplain AdGroupAd ad group ad}. The
	 * {@code adGroupId} must
	 * reference an existing ad group. The child {@code Ad} must be sufficiently
	 * specified by constructing a concrete ad type (such as {@code TextAd})
	 * and setting its fields accordingly.</p>
	 * <p>Set - Updates an ad group ad. Except for {@code status},
	 * ad group ad fields are not mutable. Status updates are
	 * straightforward - the status of the ad group ad is updated as
	 * specified. If any other field has changed, it will be ignored. If
	 * you want to change any of the fields other than status, you must
	 * make a new ad and then remove the old one.</p>
	 * <p>Remove - Removes the link between the specified AdGroup and
	 * Ad.</p>
	 *
	 * @param operations The operations to apply.
	 * @return A list of AdGroupAds where each entry in the list is the result of
	 *         applying the operation in the input list with the same index. For an
	 *         add/set operation, the return AdGroupAd will be what is saved to the db.
	 *         In the case of the remove operation, the return AdGroupAd will simply be
	 *         an AdGroupAd containing an Ad with the id set to the Ad being removed from
	 *         the AdGroup.
	 */
	public function mutate($operations)
	{
		$args = new AdGroupAdServiceMutate($operations);
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
	 * Adds labels to the AdGroupAd or removes labels from the AdGroupAd.
	 * <p>Add - Apply an existing label to an existing {@linkplain AdGroupAd ad group ad}.
	 * The {@code adGroupId} and {@code adId} must reference an existing {@linkplain AdGroupAd ad group ad}.
	 * The {@code labelId} must reference an existing {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.
	 * <p>Remove - Removes the link between the specified {@linkplain AdGroupAd ad group ad} and {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
	 *
	 * @param operations The operations to apply.
	 * @return A list of AdGroupAdLabel where each entry in the list is the result of
	 *         applying the operation in the input list with the same index. For an
	 *         add operation, the returned AdGroupAdLabel contains the AdGroupId, AdId and the LabelId.
	 *         In the case of a remove operation, the returned AdGroupAdLabel will only have AdGroupId and
	 *         AdId.
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
	 * Returns a list of AdGroupAds based on the query.
	 *
	 * @param query The SQL-like AWQL query string.
	 * @return A list of AdGroupAds.
	 * @throws ApiException if problems occur while parsing the query or fetching AdGroupAds.
	 */
	public function query($query)
	{
		$args = new Query($query);
		$result = $this->__soapCall("query", array(
			$args
		));
		return $result->rval;
	}

	/**
	 * Upgrades the url for a set of ads.
	 *
	 * @param operations The list of upgrades to apply.
	 * @return The list of Ads that were upgraded.
	 */
	public function upgradeUrl($operations)
	{
		$args = new UpgradeUrl($operations);
		$result = $this->__soapCall("upgradeUrl", array(
			$args
		));
		return $result->rval;
	}
}
