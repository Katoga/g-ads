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

/**
 * SimilarUserList is a list of users which are similar to users from another UserList.
 * These lists are readonly and automatically created by google.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class SimilarUserList extends UserList
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201509";

	const XSI_TYPE = "SimilarUserList";

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $seedUserListId;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $seedUserListName;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $seedUserListDescription;

	/**
	 *
	 * @access public
	 * @var tnsUserListMembershipStatus
	 */
	public $seedUserListStatus;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $seedListSize;

	/**
	 * Gets the namesapce of this class
	 *
	 * @return the namespace of this class
	 */
	public function getNamespace()
	{
		return self::WSDL_NAMESPACE;
	}

	/**
	 * Gets the xsi:type name of this class
	 *
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName()
	{
		return self::XSI_TYPE;
	}

	public function __construct($seedUserListId = null, $seedUserListName = null, $seedUserListDescription = null, $seedUserListStatus = null, $seedListSize = null, $id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $UserListType = null)
	{
		parent::__construct();
		$this->seedUserListId = $seedUserListId;
		$this->seedUserListName = $seedUserListName;
		$this->seedUserListDescription = $seedUserListDescription;
		$this->seedUserListStatus = $seedUserListStatus;
		$this->seedListSize = $seedListSize;
		$this->id = $id;
		$this->isReadOnly = $isReadOnly;
		$this->name = $name;
		$this->description = $description;
		$this->status = $status;
		$this->integrationCode = $integrationCode;
		$this->accessReason = $accessReason;
		$this->accountUserListStatus = $accountUserListStatus;
		$this->membershipLifeSpan = $membershipLifeSpan;
		$this->size = $size;
		$this->sizeRange = $sizeRange;
		$this->sizeForSearch = $sizeForSearch;
		$this->sizeRangeForSearch = $sizeRangeForSearch;
		$this->listType = $listType;
		$this->isEligibleForSearch = $isEligibleForSearch;
		$this->UserListType = $UserListType;
	}
}
