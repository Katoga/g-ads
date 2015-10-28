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
 * A biddable (positive) criterion in an adgroup.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class BiddableAdGroupCriterion extends AdGroupCriterion
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "BiddableAdGroupCriterion";

	/**
	 *
	 * @access public
	 * @var tnsUserStatus
	 */
	public $userStatus;

	/**
	 *
	 * @access public
	 * @var tnsSystemServingStatus
	 */
	public $systemServingStatus;

	/**
	 *
	 * @access public
	 * @var tnsApprovalStatus
	 */
	public $approvalStatus;

	/**
	 *
	 * @access public
	 * @var string[]
	 */
	public $disapprovalReasons;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $destinationUrl;

	/**
	 *
	 * @access public
	 * @var BiddableAdGroupCriterionExperimentData
	 */
	public $experimentData;

	/**
	 *
	 * @access public
	 * @var Bid
	 */
	public $firstPageCpc;

	/**
	 *
	 * @access public
	 * @var Bid
	 */
	public $topOfPageCpc;

	/**
	 *
	 * @access public
	 * @var QualityInfo
	 */
	public $qualityInfo;

	/**
	 *
	 * @access public
	 * @var BiddingStrategyConfiguration
	 */
	public $biddingStrategyConfiguration;

	/**
	 *
	 * @access public
	 * @var double
	 */
	public $bidModifier;

	/**
	 *
	 * @access public
	 * @var UrlList
	 */
	public $finalUrls;

	/**
	 *
	 * @access public
	 * @var UrlList
	 */
	public $finalMobileUrls;

	/**
	 *
	 * @access public
	 * @var AppUrlList
	 */
	public $finalAppUrls;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $trackingUrlTemplate;

	/**
	 *
	 * @access public
	 * @var CustomParameters
	 */
	public $urlCustomParameters;

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

	public function __construct($userStatus = null, $systemServingStatus = null, $approvalStatus = null, $disapprovalReasons = null, $destinationUrl = null, $experimentData = null, $firstPageCpc = null, $topOfPageCpc = null, $qualityInfo = null, $biddingStrategyConfiguration = null, $bidModifier = null, $finalUrls = null, $finalMobileUrls = null, $finalAppUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $adGroupId = null, $criterionUse = null, $criterion = null, $labels = null, $forwardCompatibilityMap = null, $AdGroupCriterionType = null)
	{
		parent::__construct();
		$this->userStatus = $userStatus;
		$this->systemServingStatus = $systemServingStatus;
		$this->approvalStatus = $approvalStatus;
		$this->disapprovalReasons = $disapprovalReasons;
		$this->destinationUrl = $destinationUrl;
		$this->experimentData = $experimentData;
		$this->firstPageCpc = $firstPageCpc;
		$this->topOfPageCpc = $topOfPageCpc;
		$this->qualityInfo = $qualityInfo;
		$this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
		$this->bidModifier = $bidModifier;
		$this->finalUrls = $finalUrls;
		$this->finalMobileUrls = $finalMobileUrls;
		$this->finalAppUrls = $finalAppUrls;
		$this->trackingUrlTemplate = $trackingUrlTemplate;
		$this->urlCustomParameters = $urlCustomParameters;
		$this->adGroupId = $adGroupId;
		$this->criterionUse = $criterionUse;
		$this->criterion = $criterion;
		$this->labels = $labels;
		$this->forwardCompatibilityMap = $forwardCompatibilityMap;
		$this->AdGroupCriterionType = $AdGroupCriterionType;
	}
}
