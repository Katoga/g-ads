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
namespace GAds\AdWords\Service\AdGroupCriterion;

/**
 * Represents a criterion in an ad group, used with AdGroupCriterionService.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdGroupCriterion
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "AdGroupCriterion";

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $adGroupId;

	/**
	 *
	 * @access public
	 * @var tnsCriterionUse
	 */
	public $criterionUse;

	/**
	 *
	 * @access public
	 * @var Criterion
	 */
	public $criterion;

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
	 * @var string
	 */
	public $AdGroupCriterionType;

	private $_parameterMap = array(
		"AdGroupCriterion.Type" => "AdGroupCriterionType"
	);

	/**
	 * Provided for setting non-php-standard named variables
	 *
	 * @param $var Variable name to set
	 * @param $value Value to set
	 */
	public function __set($var, $value)
	{
		$this->{$this->_parameterMap[$var]} = $value;
	}

	/**
	 * Provided for getting non-php-standard named variables
	 *
	 * @param $var Variable name to get
	 * @return mixed Variable value
	 */
	public function __get($var)
	{
		if (!isset($this->_parameterMap[$var])) {
			return null;
		}
		return $this->{$this->_parameterMap[$var]};
	}

	/**
	 * Provided for getting non-php-standard named variables
	 *
	 * @return array parameter map
	 */
	protected function getParameterMap()
	{
		return $this->_parameterMap;
	}

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

	public function __construct($adGroupId = null, $criterionUse = null, $criterion = null, $labels = null, $forwardCompatibilityMap = null, $AdGroupCriterionType = null)
	{
		$this->adGroupId = $adGroupId;
		$this->criterionUse = $criterionUse;
		$this->criterion = $criterion;
		$this->labels = $labels;
		$this->forwardCompatibilityMap = $forwardCompatibilityMap;
		$this->AdGroupCriterionType = $AdGroupCriterionType;
	}
}
