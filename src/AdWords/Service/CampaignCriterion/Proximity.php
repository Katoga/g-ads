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
namespace GAds\AdWords\Service\CampaignCriterion;

/**
 * Represents a Proximity Criterion.
 *
 * A proximity is an area within a certain radius of a point with the center point being described by a lat/long pair.
 * The caller may also alternatively provide address fields which will be geocoded into a lat/long pair.
 * Note: If a geoPoint value is provided, the address is not used for calculating the lat/long to target.
 * <p> A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class Proximity extends Criterion
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "Proximity";

	/**
	 *
	 * @access public
	 * @var GeoPoint
	 */
	public $geoPoint;

	/**
	 *
	 * @access public
	 * @var tnsProximityDistanceUnits
	 */
	public $radiusDistanceUnits;

	/**
	 *
	 * @access public
	 * @var double
	 */
	public $radiusInUnits;

	/**
	 *
	 * @access public
	 * @var Address
	 */
	public $address;

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

	public function __construct($geoPoint = null, $radiusDistanceUnits = null, $radiusInUnits = null, $address = null, $id = null, $type = null, $CriterionType = null)
	{
		parent::__construct();
		$this->geoPoint = $geoPoint;
		$this->radiusDistanceUnits = $radiusDistanceUnits;
		$this->radiusInUnits = $radiusInUnits;
		$this->address = $address;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}
