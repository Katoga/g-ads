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
 * A budget suggestion and its associated data (all are estimates).
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class BudgetSuggestion
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201509";

	const XSI_TYPE = "BudgetSuggestion";

	/**
	 *
	 * @access public
	 * @var Money
	 */
	public $cpc;

	/**
	 *
	 * @access public
	 * @var Money
	 */
	public $minCpc;

	/**
	 *
	 * @access public
	 * @var Money
	 */
	public $maxCpc;

	/**
	 *
	 * @access public
	 * @var Money
	 */
	public $cpm;

	/**
	 *
	 * @access public
	 * @var Money
	 */
	public $suggestedBudget;

	/**
	 *
	 * @access public
	 * @var Money
	 */
	public $minBudget;

	/**
	 *
	 * @access public
	 * @var Money
	 */
	public $maxBudget;

	/**
	 *
	 * @access public
	 * @var Money[]
	 */
	public $budgetQuantiles;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $impressions;

	/**
	 *
	 * @access public
	 * @var tnsCurrencyCode
	 */
	public $currencyCode;

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

	public function __construct($cpc = null, $minCpc = null, $maxCpc = null, $cpm = null, $suggestedBudget = null, $minBudget = null, $maxBudget = null, $budgetQuantiles = null, $impressions = null, $currencyCode = null)
	{
		$this->cpc = $cpc;
		$this->minCpc = $minCpc;
		$this->maxCpc = $maxCpc;
		$this->cpm = $cpm;
		$this->suggestedBudget = $suggestedBudget;
		$this->minBudget = $minBudget;
		$this->maxBudget = $maxBudget;
		$this->budgetQuantiles = $budgetQuantiles;
		$this->impressions = $impressions;
		$this->currencyCode = $currencyCode;
	}
}
