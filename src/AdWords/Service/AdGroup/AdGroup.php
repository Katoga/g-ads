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
 * Represents an ad group.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdGroup
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "AdGroup";

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $id;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $campaignId;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $campaignName;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 *
	 * @access public
	 * @var tnsAdGroupStatus
	 */
	public $status;

	/**
	 *
	 * @access public
	 * @var Setting[]
	 */
	public $settings;

	/**
	 *
	 * @access public
	 * @var AdGroupExperimentData
	 */
	public $experimentData;

	/**
	 *
	 * @access public
	 * @var Label[]
	 */
	public $labels;

	/**
	 *
	 * @access public
	 * @var String_StringMapEntry[]
	 */
	public $forwardCompatibilityMap;

	/**
	 *
	 * @access public
	 * @var BiddingStrategyConfiguration
	 */
	public $biddingStrategyConfiguration;

	/**
	 *
	 * @access public
	 * @var tnsCriterionTypeGroup
	 */
	public $contentBidCriterionTypeGroup;

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

	public function __construct($id = null, $campaignId = null, $campaignName = null, $name = null, $status = null, $settings = null, $experimentData = null, $labels = null, $forwardCompatibilityMap = null, $biddingStrategyConfiguration = null, $contentBidCriterionTypeGroup = null, $trackingUrlTemplate = null, $urlCustomParameters = null)
	{
		$this->id = $id;
		$this->campaignId = $campaignId;
		$this->campaignName = $campaignName;
		$this->name = $name;
		$this->status = $status;
		$this->settings = $settings;
		$this->experimentData = $experimentData;
		$this->labels = $labels;
		$this->forwardCompatibilityMap = $forwardCompatibilityMap;
		$this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
		$this->contentBidCriterionTypeGroup = $contentBidCriterionTypeGroup;
		$this->trackingUrlTemplate = $trackingUrlTemplate;
		$this->urlCustomParameters = $urlCustomParameters;
	}
}
