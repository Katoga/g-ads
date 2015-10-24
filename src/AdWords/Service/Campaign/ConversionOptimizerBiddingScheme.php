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
namespace GAds\AdWords\Service\Campaign;

/**
 * Conversion optimizer bidding strategy helps you maximize your return on investment
 * (ROI) by automatically getting you the most possible conversions for your budget.
 *
 * <p class="warning">{@code pricingMode} currently defaults to {@code CLICKS} and cannot be changed.</p>
 *
 * <p>Note that campaigns must meet <a href="https://support.google.com/adwords/answer/2471188#CORequirements">
 * specific eligibility requirements</a> before they can use the <code>ConversionOptimizer</code> bidding strategy.</p>
 *
 * <p>For more information on conversion optimizer, visit the
 * <a href="https://support.google.com/adwords/answer/2471188">Conversion Optimizer help center</a>.</p>
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class ConversionOptimizerBiddingScheme extends BiddingScheme
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "ConversionOptimizerBiddingScheme";

	/**
	 *
	 * @access public
	 * @var tnsConversionOptimizerBiddingSchemePricingMode
	 */
	public $pricingMode;

	/**
	 *
	 * @access public
	 * @var tnsConversionOptimizerBiddingSchemeBidType
	 */
	public $bidType;

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

	public function __construct($pricingMode = null, $bidType = null, $BiddingSchemeType = null)
	{
		parent::__construct();
		$this->pricingMode = $pricingMode;
		$this->bidType = $bidType;
		$this->BiddingSchemeType = $BiddingSchemeType;
	}
}
