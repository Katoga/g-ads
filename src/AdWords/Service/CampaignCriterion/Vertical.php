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
 * Use verticals to target or exclude placements in the Google Display Network based on the category into which the placement falls (for example, "Pets &amp; Animals/Pets/Dogs").
 * <a href="/adwords/api/docs/appendix/verticals">View the complete list of available vertical categories.</a>
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class Vertical extends Criterion
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "Vertical";

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $verticalId;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $verticalParentId;

	/**
	 *
	 * @access public
	 * @var string[]
	 */
	public $path;

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

	public function __construct($verticalId = null, $verticalParentId = null, $path = null, $id = null, $type = null, $CriterionType = null)
	{
		parent::__construct();
		$this->verticalId = $verticalId;
		$this->verticalParentId = $verticalParentId;
		$this->path = $path;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}
