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
 * Represents a product ad (known as a <a href="//support.google.com/adwords/bin/answer.py?answer=2456103">product listing ad</a> in the AdWords user interface).
 * A product ad displays product data (managed using the Google Merchant Center) that is pulled from the Google base product feed specified in the parent campaign's {@linkplain ShoppingSetting shopping setting}.
 *
 * <p class="caution"><b>Caution:</b> Product ads do not use {@link #url url}, {@link #finalUrls finalUrls}, {@link #finalMobileUrls finalMobileUrls}, {@link #finalAppUrls finalAppUrls}, or {@link #displayUrl displayUrl};
 * setting these fields on a product ad will cause an error.
 * {@link #urlCustomParameters urlCustomParameters} and {@link #trackingUrlTemplate trackingUrlTemplate} can be set, but it is not recommended, as they will not be used; they should be set at the ad group or campaign level instead.</p>
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class ProductAd extends Ad
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "ProductAd";

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $promotionLine;

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

	public function __construct($promotionLine = null, $id = null, $url = null, $displayUrl = null, $finalUrls = null, $finalMobileUrls = null, $finalAppUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $devicePreference = null, $AdType = null)
	{
		parent::__construct();
		$this->promotionLine = $promotionLine;
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
