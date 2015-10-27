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
 * Represents a <a href="//www.google.com/adwords/displaynetwork/plan-creative-campaigns/display-ad-builder.html">Display Ad Builder</a> template ad.
 * A template ad is composed of a template (specified by its ID) and the data that populates the template's fields.
 * For a list of available templates and their required fields, see <a href="/adwords/api/docs/appendix/templateads">Template Ads</a>.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class TemplateAd extends Ad
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "TemplateAd";

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $templateId;

	/**
	 *
	 * @access public
	 * @var AdUnionId
	 */
	public $adUnionId;

	/**
	 *
	 * @access public
	 * @var TemplateElement[]
	 */
	public $templateElements;

	/**
	 *
	 * @access public
	 * @var Image
	 */
	public $adAsImage;

	/**
	 *
	 * @access public
	 * @var Dimensions
	 */
	public $dimensions;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $duration;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $originAdId;

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

	public function __construct($templateId = null, $adUnionId = null, $templateElements = null, $adAsImage = null, $dimensions = null, $name = null, $duration = null, $originAdId = null, $id = null, $url = null, $displayUrl = null, $finalUrls = null, $finalMobileUrls = null, $finalAppUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $devicePreference = null, $AdType = null)
	{
		parent::__construct();
		$this->templateId = $templateId;
		$this->adUnionId = $adUnionId;
		$this->templateElements = $templateElements;
		$this->adAsImage = $adAsImage;
		$this->dimensions = $dimensions;
		$this->name = $name;
		$this->duration = $duration;
		$this->originAdId = $originAdId;
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
