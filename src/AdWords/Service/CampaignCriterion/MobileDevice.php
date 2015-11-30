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
 * Represents a Mobile Device Criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class MobileDevice extends Criterion
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "MobileDevice";

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $deviceName;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $manufacturerName;

	/**
	 *
	 * @access public
	 * @var tnsMobileDeviceDeviceType
	 */
	public $deviceType;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $operatingSystemName;

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

	public function __construct($deviceName = null, $manufacturerName = null, $deviceType = null, $operatingSystemName = null, $id = null, $type = null, $CriterionType = null)
	{
		parent::__construct();
		$this->deviceName = $deviceName;
		$this->manufacturerName = $manufacturerName;
		$this->deviceType = $deviceType;
		$this->operatingSystemName = $operatingSystemName;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}
