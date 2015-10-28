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
 * Target Roas bidding strategy helps you maximize revenue while averaging a specific target Return On Average Spend (ROAS).
 *
 * <p>For example: If TargetRoas is 1.5, the strategy will create as much revenue as possible while ensuring that every $1.00 of clicks provides $1.50 in conversion value.
 *
 * <p>Note that campaigns must meet <a href="//support.google.com/adwords/bin/answer.py?answer=2471188">specific eligibility requirements</a> before they can use the <code>TargetRoasBiddingScheme</code> bidding strategy.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class TargetRoasBiddingScheme extends BiddingScheme
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "TargetRoasBiddingScheme";

	/**
	 *
	 * @access public
	 * @var double
	 */
	public $targetRoas;

	/**
	 *
	 * @access public
	 * @var Money
	 */
	public $bidCeiling;

	/**
	 *
	 * @access public
	 * @var Money
	 */
	public $bidFloor;

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

	public function __construct($targetRoas = null, $bidCeiling = null, $bidFloor = null, $BiddingSchemeType = null)
	{
		parent::__construct();
		$this->targetRoas = $targetRoas;
		$this->bidCeiling = $bidCeiling;
		$this->bidFloor = $bidFloor;
		$this->BiddingSchemeType = $BiddingSchemeType;
	}
}
