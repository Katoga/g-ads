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
namespace GAds\AdWords\Service\BiddingStrategy;

/**
 * Target Spend bidding scheme, in which Google automatically places
 * bids for the user based on their daily/monthly budget or optional
 * spend target.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * 
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class TargetSpendBiddingScheme extends BiddingScheme
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "TargetSpendBiddingScheme";

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
	public $spendTarget;

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

	public function __construct($bidCeiling = null, $spendTarget = null, $BiddingSchemeType = null)
	{
		parent::__construct();
		$this->bidCeiling = $bidCeiling;
		$this->spendTarget = $spendTarget;
		$this->BiddingSchemeType = $BiddingSchemeType;
	}
}