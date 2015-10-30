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
 * A {@link Criterion} which describes the product or service an Ad is targeting.
 * A product and service criterion can be used to derive a group of {@link KeywordSet} by AdWords Express.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class ProductService extends Criterion
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201509";

	const XSI_TYPE = "ProductService";

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $text;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $locale;

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

	public function __construct($text = null, $locale = null, $id = null, $type = null, $CriterionType = null)
	{
		parent::__construct();
		$this->text = $text;
		$this->locale = $locale;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}
