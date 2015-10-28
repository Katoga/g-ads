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
namespace GAds\AdWords\Service\AdGroupCriterion;

/**
 * Target Cpa bidding strategy helps you maximize your return on investment (ROI) by automatically getting you the most possible conversions for your budget.
 *
 * This is similar to the <code>ConversionOptimizerBiddingScheme<code> but does not support user-entered AdGroup-level target CPA bids, but rather a strategy-wide average CPA target.
 *
 * <p>Note that campaigns must meet <a href="//support.google.com/adwords/bin/answer.py?answer=2471188">specific eligibility requirements</a> before they can use the <code>TargetCpaBiddingScheme</code> bidding strategy.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class TargetCpaBiddingScheme extends BiddingScheme
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "TargetCpaBiddingScheme";

	/**
	 *
	 * @access public
	 * @var Money
	 */
	public $targetCpa;

	/**
	 *
	 * @access public
	 * @var Money
	 */
	public $maxCpcBidCeiling;

	/**
	 *
	 * @access public
	 * @var Money
	 */
	public $maxCpcBidFloor;

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

	public function __construct($targetCpa = null, $maxCpcBidCeiling = null, $maxCpcBidFloor = null, $BiddingSchemeType = null)
	{
		parent::__construct();
		$this->targetCpa = $targetCpa;
		$this->maxCpcBidCeiling = $maxCpcBidCeiling;
		$this->maxCpcBidFloor = $maxCpcBidFloor;
		$this->BiddingSchemeType = $BiddingSchemeType;
	}
}
