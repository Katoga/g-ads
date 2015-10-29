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
 * A page of {@link BudgetOrder}s from {@link BudgetOrderService#get} method.
 *
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class BudgetOrderPage extends Page
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201509";

	const XSI_TYPE = "BudgetOrderPage";

	/**
	 *
	 * @access public
	 * @var BudgetOrder[]
	 */
	public $entries;

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

	public function __construct($entries = null, $totalNumEntries = null, $PageType = null)
	{
		parent::__construct();
		$this->entries = $entries;
		$this->totalNumEntries = $totalNumEntries;
		$this->PageType = $PageType;
	}
}