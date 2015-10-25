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
namespace GAds\AdWords\Service\Budget;

/**
 * Budgets are used for managing the amount of money spent on AdWords.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class Budget
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "Budget";

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $budgetId;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 *
	 * @access public
	 * @var tnsBudgetBudgetPeriod
	 */
	public $period;

	/**
	 *
	 * @access public
	 * @var Money
	 */
	public $amount;

	/**
	 *
	 * @access public
	 * @var tnsBudgetBudgetDeliveryMethod
	 */
	public $deliveryMethod;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $referenceCount;

	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $isExplicitlyShared;

	/**
	 *
	 * @access public
	 * @var tnsBudgetBudgetStatus
	 */
	public $status;

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

	public function __construct($budgetId = null, $name = null, $period = null, $amount = null, $deliveryMethod = null, $referenceCount = null, $isExplicitlyShared = null, $status = null)
	{
		$this->budgetId = $budgetId;
		$this->name = $name;
		$this->period = $period;
		$this->amount = $amount;
		$this->deliveryMethod = $deliveryMethod;
		$this->referenceCount = $referenceCount;
		$this->isExplicitlyShared = $isExplicitlyShared;
		$this->status = $status;
	}
}
