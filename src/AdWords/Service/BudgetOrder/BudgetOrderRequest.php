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
namespace GAds\AdWords\Service\BudgetOrder;

/**
 * Holds fields that provide information on the last set of values that were passed in through the parent BudgetOrder for mutate.add and mutate.set.
 * <span class="constraint Billing">This element only applies if manager account is whitelisted for new billing backend.</span>
 *
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class BudgetOrderRequest
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201509";

	const XSI_TYPE = "BudgetOrderRequest";

	/**
	 *
	 * @access public
	 * @var tnsBudgetOrderRequestStatus
	 */
	public $status;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $date;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $billingAccountName;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $poNumber;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $budgetOrderName;

	/**
	 *
	 * @access public
	 * @var Money
	 */
	public $spendingLimit;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $startDateTime;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $endDateTime;

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

	public function __construct($status = null, $date = null, $billingAccountName = null, $poNumber = null, $budgetOrderName = null, $spendingLimit = null, $startDateTime = null, $endDateTime = null)
	{
		$this->status = $status;
		$this->date = $date;
		$this->billingAccountName = $billingAccountName;
		$this->poNumber = $poNumber;
		$this->budgetOrderName = $budgetOrderName;
		$this->spendingLimit = $spendingLimit;
		$this->startDateTime = $startDateTime;
		$this->endDateTime = $endDateTime;
	}
}
