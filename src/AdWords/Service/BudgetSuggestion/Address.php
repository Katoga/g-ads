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
namespace GAds\AdWords\Service\BudgetSuggestion;

/**
 * Structure to specify an address location.
 *
 * Structure to specify an address location.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class Address
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "Address";

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $streetAddress;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $streetAddress2;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $cityName;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $provinceCode;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $provinceName;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $postalCode;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $countryCode;

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

	public function __construct($streetAddress = null, $streetAddress2 = null, $cityName = null, $provinceCode = null, $provinceName = null, $postalCode = null, $countryCode = null)
	{
		$this->streetAddress = $streetAddress;
		$this->streetAddress2 = $streetAddress2;
		$this->cityName = $cityName;
		$this->provinceCode = $provinceCode;
		$this->provinceName = $provinceName;
		$this->postalCode = $postalCode;
		$this->countryCode = $countryCode;
	}
}
