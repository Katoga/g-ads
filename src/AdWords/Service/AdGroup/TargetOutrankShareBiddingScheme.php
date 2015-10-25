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
namespace GAds\AdWords\Service\AdGroup;

/**
 * Target Outrank Share bidding strategy is an automated bidding strategy which automatically sets bids so that the customer's ads appear above a specified competitors' ads for a specified target fraction of the advertiser's eligible impressions on Google.com.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class TargetOutrankShareBiddingScheme extends BiddingScheme
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "TargetOutrankShareBiddingScheme";

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $targetOutrankShare;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $competitorDomain;

	/**
	 *
	 * @access public
	 * @var Money
	 */
	public $maxCpcBidCeiling;

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

	public function __construct($targetOutrankShare = null, $competitorDomain = null, $maxCpcBidCeiling = null, $bidChangesForRaisesOnly = null, $raiseBidWhenLowQualityScore = null, $BiddingSchemeType = null)
	{
		parent::__construct();
		$this->targetOutrankShare = $targetOutrankShare;
		$this->competitorDomain = $competitorDomain;
		$this->maxCpcBidCeiling = $maxCpcBidCeiling;
		$this->bidChangesForRaisesOnly = $bidChangesForRaisesOnly;
		$this->raiseBidWhenLowQualityScore = $raiseBidWhenLowQualityScore;
		$this->BiddingSchemeType = $BiddingSchemeType;
	}
}
