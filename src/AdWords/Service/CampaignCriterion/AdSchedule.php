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
 * Represents an AdSchedule Criterion.
 * AdSchedule is specified as day and time of the week criteria to target the Ads.
 * <p><b>Note:</b> An AdSchedule may not have more than <b>six</b> intervals in a day.</p>
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdSchedule extends Criterion
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "AdSchedule";

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

	public function __construct($dayOfWeek = null, $startHour = null, $startMinute = null, $endHour = null, $endMinute = null, $id = null, $type = null, $CriterionType = null)
	{
		parent::__construct();
		$this->dayOfWeek = $dayOfWeek;
		$this->startHour = $startHour;
		$this->startMinute = $startMinute;
		$this->endHour = $endHour;
		$this->endMinute = $endMinute;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}