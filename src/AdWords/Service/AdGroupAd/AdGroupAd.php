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
namespace GAds\AdWords\Service\AdGroupAd;

/**
 * Represents an ad in an ad group.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdGroupAd
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "AdGroupAd";

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $adGroupId;

	/**
	 *
	 * @access public
	 * @var Ad
	 */
	public $ad;

	/**
	 *
	 * @access public
	 * @var AdGroupAdExperimentData
	 */
	public $experimentData;

	/**
	 *
	 * @access public
	 * @var tnsAdGroupAdStatus
	 */
	public $status;

	/**
	 *
	 * @access public
	 * @var tnsAdGroupAdApprovalStatus
	 */
	public $approvalStatus;

	/**
	 *
	 * @access public
	 * @var string[]
	 */
	public $trademarks;

	/**
	 *
	 * @access public
	 * @var string[]
	 */
	public $disapprovalReasons;

	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $trademarkDisapproved;

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

	public function __construct($adGroupId = null, $ad = null, $experimentData = null, $status = null, $approvalStatus = null, $trademarks = null, $disapprovalReasons = null, $trademarkDisapproved = null, $labels = null, $forwardCompatibilityMap = null)
	{
		$this->adGroupId = $adGroupId;
		$this->ad = $ad;
		$this->experimentData = $experimentData;
		$this->status = $status;
		$this->approvalStatus = $approvalStatus;
		$this->trademarks = $trademarks;
		$this->disapprovalReasons = $disapprovalReasons;
		$this->trademarkDisapproved = $trademarkDisapproved;
		$this->labels = $labels;
		$this->forwardCompatibilityMap = $forwardCompatibilityMap;
	}
}
