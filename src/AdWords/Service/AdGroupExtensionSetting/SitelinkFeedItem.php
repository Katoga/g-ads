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
namespace GAds\AdWords\Service\AdGroupExtensionSetting;

/**
 * Represents a sitelink extension.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class SitelinkFeedItem extends ExtensionFeedItem
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "SitelinkFeedItem";

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $sitelinkText;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $sitelinkUrl;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $sitelinkLine2;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $sitelinkLine3;

	/**
	 *
	 * @access public
	 * @var UrlList
	 */
	public $sitelinkFinalUrls;

	/**
	 *
	 * @access public
	 * @var UrlList
	 */
	public $sitelinkFinalMobileUrls;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $sitelinkTrackingUrlTemplate;

	/**
	 *
	 * @access public
	 * @var CustomParameters
	 */
	public $sitelinkUrlCustomParameters;

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

	public function __construct($sitelinkText = null, $sitelinkUrl = null, $sitelinkLine2 = null, $sitelinkLine3 = null, $sitelinkFinalUrls = null, $sitelinkFinalMobileUrls = null, $sitelinkTrackingUrlTemplate = null, $sitelinkUrlCustomParameters = null, $feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, $policyData = null, $ExtensionFeedItemType = null)
	{
		parent::__construct();
		$this->sitelinkText = $sitelinkText;
		$this->sitelinkUrl = $sitelinkUrl;
		$this->sitelinkLine2 = $sitelinkLine2;
		$this->sitelinkLine3 = $sitelinkLine3;
		$this->sitelinkFinalUrls = $sitelinkFinalUrls;
		$this->sitelinkFinalMobileUrls = $sitelinkFinalMobileUrls;
		$this->sitelinkTrackingUrlTemplate = $sitelinkTrackingUrlTemplate;
		$this->sitelinkUrlCustomParameters = $sitelinkUrlCustomParameters;
		$this->feedId = $feedId;
		$this->feedItemId = $feedItemId;
		$this->status = $status;
		$this->feedType = $feedType;
		$this->startTime = $startTime;
		$this->endTime = $endTime;
		$this->devicePreference = $devicePreference;
		$this->scheduling = $scheduling;
		$this->policyData = $policyData;
		$this->ExtensionFeedItemType = $ExtensionFeedItemType;
	}
}
