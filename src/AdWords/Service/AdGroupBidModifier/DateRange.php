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
namespace GAds\AdWords\Service\AdGroupBidModifier;

/**
 * Represents a range of dates that has either an upper or a lower bound.
 * The format for the date is YYYYMMDD.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class DateRange
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "DateRange";

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $min;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $max;

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

	public function __construct($min = null, $max = null)
	{
		$this->min = $min;
		$this->max = $max;
	}
}
