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
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 * Gets a list of {@link BudgetOrder}s using the generic selector.
 *
 * @param serviceSelector specifies which BudgetOrder to return.
 * @return A {@link BudgetOrderPage} of BudgetOrders of the client customer.
 *         All BudgetOrder fields are returned. Stats are not yet supported.
 * @throws ApiException
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class BudgetOrderServiceGet
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201509";

	const XSI_TYPE = "";

	/**
	 *
	 * @access public
	 * @var Selector
	 */
	public $serviceSelector;

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

	public function __construct($serviceSelector = null)
	{
		$this->serviceSelector = $serviceSelector;
	}
}
