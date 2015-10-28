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
namespace GAds\AdWords\Service\AdGroupExtensionSetting;

/**
 * Represents a FeedItem schedule, which specifies a time interval on a given day when the feed item may serve.
 * The FeedItemSchedule times are in the account's time zone.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class FeedItemSchedule
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "FeedItemSchedule";

	/**
	 *
	 * @access public
	 * @var tnsDayOfWeek
	 */
	public $dayOfWeek;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $startHour;

	/**
	 *
	 * @access public
	 * @var tnsMinuteOfHour
	 */
	public $startMinute;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $endHour;

	/**
	 *
	 * @access public
	 * @var tnsMinuteOfHour
	 */
	public $endMinute;

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

	public function __construct($dayOfWeek = null, $startHour = null, $startMinute = null, $endHour = null, $endMinute = null)
	{
		$this->dayOfWeek = $dayOfWeek;
		$this->startHour = $startHour;
		$this->startMinute = $startMinute;
		$this->endHour = $endHour;
		$this->endMinute = $endMinute;
	}
}
