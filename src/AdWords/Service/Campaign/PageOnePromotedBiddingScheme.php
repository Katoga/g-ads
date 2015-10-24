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
 * Page-One Promoted bidding scheme, which sets max cpc bids to target impressions on page one or page one promoted slots on google.com.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class PageOnePromotedBiddingScheme extends BiddingScheme
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "PageOnePromotedBiddingScheme";

	/**
	 *
	 * @access public
	 * @var tnsPageOnePromotedBiddingSchemeStrategyGoal
	 */
	public $strategyGoal;

	/**
	 *
	 * @access public
	 * @var Money
	 */
	public $bidCeiling;

	/**
	 *
	 * @access public
	 * @var double
	 */
	public $bidModifier;

	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $bidChangesForRaisesOnly;

	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $raiseBidWhenBudgetConstrained;

	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $raiseBidWhenLowQualityScore;

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

	public function __construct($strategyGoal = null, $bidCeiling = null, $bidModifier = null, $bidChangesForRaisesOnly = null, $raiseBidWhenBudgetConstrained = null, $raiseBidWhenLowQualityScore = null, $BiddingSchemeType = null)
	{
		parent::__construct();
		$this->strategyGoal = $strategyGoal;
		$this->bidCeiling = $bidCeiling;
		$this->bidModifier = $bidModifier;
		$this->bidChangesForRaisesOnly = $bidChangesForRaisesOnly;
		$this->raiseBidWhenBudgetConstrained = $raiseBidWhenBudgetConstrained;
		$this->raiseBidWhenLowQualityScore = $raiseBidWhenLowQualityScore;
		$this->BiddingSchemeType = $BiddingSchemeType;
	}
}
