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
namespace GAds\AdWords\Service\AdwordsUserList;

use GAds\AdWords\Lib\AdWordsSoapClient;

/**
 * AdwordsUserListService
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdwordsUserListService extends AdWordsSoapClient
{

	const SERVICE_NAME = "AdwordsUserListService";

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201509";

	const ENDPOINT = "https://adwords.google.com/api/adwords/rm/v201509/AdwordsUserListService";

	/**
	 * The endpoint of the service
	 *
	 * @var string
	 */
	public static $endpoint = "https://adwords.google.com/api/adwords/rm/v201509/AdwordsUserListService";

	/**
	 * Default class map for wsdl=>php
	 *
	 * @access private
	 * @var array
	 */
	public static $classmap = array(
		"AuthenticationError" => "AuthenticationError",
		"AuthorizationError" => "AuthorizationError",
		"DateError" => "DateError",
		"DateRange" => "DateRange",
		"DistinctError" => "DistinctError",
		"EntityNotFound" => "EntityNotFound",
		"InternalApiError" => "InternalApiError",
		"NotEmptyError" => "NotEmptyError",
		"NotWhitelistedError" => "NotWhitelistedError",
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
		"RejectedError" => "RejectedError",
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
		"ListReturnValue" => "ListReturnValue",
		"Operation" => "Operation",
		"Page" => "Page",
		"AuthenticationError.Reason" => "AuthenticationErrorReason",
		"AuthorizationError.Reason" => "AuthorizationErrorReason",
		"DatabaseError.Reason" => "DatabaseErrorReason",
		"DateError.Reason" => "DateErrorReason",
		"DistinctError.Reason" => "DistinctErrorReason",
		"EntityNotFound.Reason" => "EntityNotFoundReason",
		"InternalApiError.Reason" => "InternalApiErrorReason",
		"NotEmptyError.Reason" => "NotEmptyErrorReason",
		"NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
		"NullError.Reason" => "NullErrorReason",
		"OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
		"Operator" => "Operator",
		"OperatorError.Reason" => "OperatorErrorReason",
		"Predicate.Operator" => "PredicateOperator",
		"QuotaCheckError.Reason" => "QuotaCheckErrorReason",
		"RangeError.Reason" => "RangeErrorReason",
		"RateExceededError.Reason" => "RateExceededErrorReason",
		"ReadOnlyError.Reason" => "ReadOnlyErrorReason",
		"RejectedError.Reason" => "RejectedErrorReason",
		"RequiredError.Reason" => "RequiredErrorReason",
		"SelectorError.Reason" => "SelectorErrorReason",
		"SizeLimitError.Reason" => "SizeLimitErrorReason",
		"SortOrder" => "SortOrder",
		"StringFormatError.Reason" => "StringFormatErrorReason",
		"StringLengthError.Reason" => "StringLengthErrorReason",
		"CollectionSizeError" => "CollectionSizeError",
		"UserListConversionType" => "UserListConversionType",
		"CrmBasedUserList" => "CrmBasedUserList",
		"DateKey" => "DateKey",
		"DateRuleItem" => "DateRuleItem",
		"DateSpecificRuleUserList" => "DateSpecificRuleUserList",
		"ExpressionRuleUserList" => "ExpressionRuleUserList",
		"LogicalUserList" => "LogicalUserList",
		"LogicalUserListOperand" => "LogicalUserListOperand",
		"MutateMembersError" => "MutateMembersError",
		"MutateMembersOperand" => "MutateMembersOperand",
		"MutateMembersOperation" => "MutateMembersOperation",
		"MutateMembersReturnValue" => "MutateMembersReturnValue",
		"NumberKey" => "NumberKey",
		"NumberRuleItem" => "NumberRuleItem",
		"BasicUserList" => "BasicUserList",
		"Rule" => "Rule",
		"RuleBasedUserList" => "RuleBasedUserList",
		"RuleItem" => "RuleItem",
		"RuleItemGroup" => "RuleItemGroup",
		"SimilarUserList" => "SimilarUserList",
		"StringKey" => "StringKey",
		"StringRuleItem" => "StringRuleItem",
		"UserList" => "UserList",
		"UserListError" => "UserListError",
		"UserListLogicalRule" => "UserListLogicalRule",
		"UserListOperation" => "UserListOperation",
		"UserListPage" => "UserListPage",
		"UserListReturnValue" => "UserListReturnValue",
		"AccessReason" => "AccessReason",
		"AccountUserListStatus" => "AccountUserListStatus",
		"CollectionSizeError.Reason" => "CollectionSizeErrorReason",
		"UserListConversionType.Category" => "UserListConversionTypeCategory",
		"DateRuleItem.DateOperator" => "DateRuleItemDateOperator",
		"MutateMembersError.Reason" => "MutateMembersErrorReason",
		"MutateMembersOperand.DataType" => "MutateMembersOperandDataType",
		"NumberRuleItem.NumberOperator" => "NumberRuleItemNumberOperator",
		"SizeRange" => "SizeRange",
		"StringRuleItem.StringOperator" => "StringRuleItemStringOperator",
		"UserListError.Reason" => "UserListErrorReason",
		"UserListLogicalRule.Operator" => "UserListLogicalRuleOperator",
		"UserListMembershipStatus" => "UserListMembershipStatus",
		"UserListType" => "UserListType",
		"get" => "AdwordsUserListServiceGet",
		"getResponse" => "AdwordsUserListServiceGetResponse",
		"mutate" => "AdwordsUserListServiceMutate",
		"mutateResponse" => "AdwordsUserListServiceMutateResponse",
		"mutateMembers" => "MutateMembers",
		"mutateMembersResponse" => "MutateMembersResponse"
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
	 * Returns the list of user lists that meet the selector criteria.
	 *
	 * @param serviceSelector the selector specifying the {@link UserList}s to return.
	 * @return a list of UserList entities which meet the selector criteria.
	 * @throws ApiException if problems occurred while fetching UserList information.
	 */
	public function get($serviceSelector)
	{
		$args = new AdwordsUserListServiceGet($serviceSelector);
		$result = $this->__soapCall("get", array(
			$args
		));
		return $result->rval;
	}

	/**
	 * <span class="constraint CollectionSize">The minimum size of this collection is 1. The maximum size of this collection is 10000.</span>
	 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
	 *
	 * Applies a list of mutate operations (i.e. add, set):
	 *
	 * Add - creates a set of user lists
	 * Set - updates a set of user lists
	 * Remove - not supported
	 *
	 * @param operations the operations to apply
	 * @return a list of UserList objects
	 */
	public function mutate($operations)
	{
		$args = new AdwordsUserListServiceMutate($operations);
		$result = $this->__soapCall("mutate", array(
			$args
		));
		return $result->rval;
	}

	/**
	 * <span class="constraint CollectionSize">The minimum size of this collection is 1. The maximum size of this collection is 10000.</span>
	 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
	 *
	 * Mutate members of user lists by either adding or removing their lists of members.
	 *
	 * <p>Note that operations cannot have same user list id but different operators.
	 *
	 * @param operations the mutate members operations to apply
	 * @return a list of UserList objects
	 * @throws ApiException when there are one or more errors with the request
	 */
	public function mutateMembers($operations)
	{
		$args = new MutateMembers($operations);
		$result = $this->__soapCall("mutateMembers", array(
			$args
		));
		return $result->rval;
	}
}
