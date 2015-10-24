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
 * Represents a collection of settings related to ads geotargeting.
 *
 * <p>AdWords ads can be geotargeted using <b>Location of Presence</b> (<b>LOP</b>),
 * <b>Area of Interest</b> (<b>AOI</b>), or both. LOP is the physical location
 * of the user performing the search; AOI is the geographical region
 * in which the searcher is interested. For example, if a user in
 * New York City performs a search "hotels california", their LOP
 * is New York City and their AOI is California.
 *
 * <p>Additionally, ads can be <b>positively</b> or <b>negatively</b> geotargeted.
 * An ad that is positively geotargeted to New York City only appears
 * to users whose location is related (via AOI or LOP) to New York City. An ad
 * that is negatively geotargeted to New York City appears for <i>all</i>
 * users <i>except</i> those whose location is related to New York City. Ads can
 * only be negatively geotargeted if a positive geotargeting is also supplied, and
 * the negatively geotargeted region must be contained within the positive
 * region.
 *
 * <p>Geotargeting settings allow ads to be targeted in the following way:
 * <ul>
 * <li> Positively geotargeted using solely AOI, solely LOP, or either.
 * <li> Negatively geotargeted using solely LOP, or both.
 * </ul>
 *
 * <p>This setting applies only to ads shown on the search network, and does
 * not affect ads shown on the Google Display Network.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class GeoTargetTypeSetting extends Setting
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "GeoTargetTypeSetting";

	/**
	 *
	 * @access public
	 * @var tnsGeoTargetTypeSettingPositiveGeoTargetType
	 */
	public $positiveGeoTargetType;

	/**
	 *
	 * @access public
	 * @var tnsGeoTargetTypeSettingNegativeGeoTargetType
	 */
	public $negativeGeoTargetType;

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

	public function __construct($positiveGeoTargetType = null, $negativeGeoTargetType = null, $SettingType = null)
	{
		parent::__construct();
		$this->positiveGeoTargetType = $positiveGeoTargetType;
		$this->negativeGeoTargetType = $negativeGeoTargetType;
		$this->SettingType = $SettingType;
	}
}
