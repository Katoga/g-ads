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
namespace GAds\AdWords\Service\BudgetSuggestion;

/**
 * UserList - represents a user list that is defined by the advertiser to be targeted.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 *
 * Structure to specify an address location.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class CriterionUserList extends Criterion
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "CriterionUserList";

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $userListId;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $userListName;

	/**
	 *
	 * @access public
	 * @var tnsCriterionUserListMembershipStatus
	 */
	public $userListMembershipStatus;

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

	public function __construct($userListId = null, $userListName = null, $userListMembershipStatus = null, $id = null, $type = null, $CriterionType = null)
	{
		parent::__construct();
		$this->userListId = $userListId;
		$this->userListName = $userListName;
		$this->userListMembershipStatus = $userListMembershipStatus;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}
