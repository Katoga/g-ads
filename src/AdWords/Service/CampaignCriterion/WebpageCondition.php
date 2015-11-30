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
 * Logical expression for targeting webpages of an advertiser's website.
 *
 * <p>A condition is defined as {@code operand OP argument} where {@code operand} is one of the values enumerated in {@link WebpageConditionOperand}, and, based on this value, {@code OP} is either of {@code EQUALS} or {@code CONTAINS}.</p>
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class WebpageCondition
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "WebpageCondition";

	/**
	 *
	 * @access public
	 * @var tnsWebpageConditionOperand
	 */
	public $operand;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $argument;

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

	public function __construct($operand = null, $argument = null)
	{
		$this->operand = $operand;
		$this->argument = $argument;
	}
}
