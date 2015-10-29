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
namespace GAds\AdWords\Service\AdwordsUserList;

/**
 * A custom parameter of date type.
 * Supported date formats are listed as follows:
 * <ul>
 * <li> 2011-03-31T12:20:19-05:00
 * <li> 03/31/2011 12:20:19-05:00
 * <li> Fri, Mar 31 2011 12:20:19 EST
 * <li> Fri, Mar 31 12:20:19 EST 2011
 * </ul>
 * <p>
 * If time zone information is not present in the value, it is assumed to be PST. If time value is not specified, it defaults to midnight of the day.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class DateKey
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201509";

	const XSI_TYPE = "DateKey";

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $name;

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

	public function __construct($name = null)
	{
		$this->name = $name;
	}
}
