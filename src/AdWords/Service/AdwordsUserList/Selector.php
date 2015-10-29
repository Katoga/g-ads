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
 * A generic selector to specify the type of information to return.
 *
 * Errors returned when Authentication failed.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class Selector
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "Selector";

	/**
	 *
	 * @access public
	 * @var string[]
	 */
	public $fields;

	/**
	 *
	 * @access public
	 * @var Predicate[]
	 */
	public $predicates;

	/**
	 *
	 * @access public
	 * @var DateRange
	 */
	public $dateRange;

	/**
	 *
	 * @access public
	 * @var OrderBy[]
	 */
	public $ordering;

	/**
	 *
	 * @access public
	 * @var Paging
	 */
	public $paging;

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

	public function __construct($fields = null, $predicates = null, $dateRange = null, $ordering = null, $paging = null)
	{
		$this->fields = $fields;
		$this->predicates = $predicates;
		$this->dateRange = $dateRange;
		$this->ordering = $ordering;
		$this->paging = $paging;
	}
}
