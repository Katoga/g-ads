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
 * Represents a CallOnlyAd.
 *
 * <p class="caution"><b>Caution:</b> Call only ads do not use {@link #url url}, {@link #finalUrls finalUrls}, {@link #finalMobileUrls finalMobileUrls}, {@link #finalAppUrls finalAppUrls}, {@link #urlCustomParameters urlCustomParameters}, or {@link #trackingUrlTemplate trackingUrlTemplate};
 * setting these fields on a call only ad will cause an error.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class CallOnlyAd extends Ad
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "CallOnlyAd";

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $countryCode;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $phoneNumber;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $businessName;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $description1;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $description2;

	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $callTracked;

	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $disableCallConversion;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $conversionTypeId;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $phoneNumberVerificationUrl;

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

	public function __construct($countryCode = null, $phoneNumber = null, $businessName = null, $description1 = null, $description2 = null, $callTracked = null, $disableCallConversion = null, $conversionTypeId = null, $phoneNumberVerificationUrl = null, $id = null, $url = null, $displayUrl = null, $finalUrls = null, $finalMobileUrls = null, $finalAppUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $devicePreference = null, $AdType = null)
	{
		parent::__construct();
		$this->countryCode = $countryCode;
		$this->phoneNumber = $phoneNumber;
		$this->businessName = $businessName;
		$this->description1 = $description1;
		$this->description2 = $description2;
		$this->callTracked = $callTracked;
		$this->disableCallConversion = $disableCallConversion;
		$this->conversionTypeId = $conversionTypeId;
		$this->phoneNumberVerificationUrl = $phoneNumberVerificationUrl;
		$this->id = $id;
		$this->url = $url;
		$this->displayUrl = $displayUrl;
		$this->finalUrls = $finalUrls;
		$this->finalMobileUrls = $finalMobileUrls;
		$this->finalAppUrls = $finalAppUrls;
		$this->trackingUrlTemplate = $trackingUrlTemplate;
		$this->urlCustomParameters = $urlCustomParameters;
		$this->devicePreference = $devicePreference;
		$this->AdType = $AdType;
	}
}
