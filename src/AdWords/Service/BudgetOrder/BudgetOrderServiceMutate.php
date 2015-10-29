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
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
 *
 * Mutates BudgetOrders, supported operations are:
 * <p><code>ADD</code>: Adds a {@link BudgetOrder} to the billing accountspecified by the billing account ID.</p>
 * <p><code>SET</code>: Sets the start/end date and amount of the{@link BudgetOrder}.</p>
 * <p><code>REMOVE</code>: Cancels the {@link BudgetOrder} (status change).</p>
 * <p class="warning"><b>Warning:</b> The <code>BudgetOrderService</code>is limited to one operation per mutate request. Any attempt to make morethan one operation will result in an <code>ApiException</code>.</p>
 *
 * @param operations A list of operations, <b>however currently we onlysupport one operation per mutate call</b>.
 * @return BudgetOrders affected by the mutate operation.
 * @throws ApiException
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class BudgetOrderServiceMutate
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201509";

	const XSI_TYPE = "";

	/**
	 *
	 * @access public
	 * @var BudgetOrderOperation[]
	 */
	public $operations;

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

	public function __construct($operations = null)
	{
		$this->operations = $operations;
	}
}
