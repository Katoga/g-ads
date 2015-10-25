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
namespace GAds\AdWords\Service\AccountLabel;

/**
 * Returns a list of labels specified by the selector for the authenticated user.
 *
 * @param selector filters the list of labels to return
 * @return response containing lists of labels that meet all the criteria of the selector
 * @throws ApiException if a problem occurs fetching the information requested
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AccountLabelServiceGet
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201509";

	const XSI_TYPE = "";

	/**
	 *
	 * @access public
	 * @var Selector
	 */
	public $selector;

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

	public function __construct($selector = null)
	{
		$this->selector = $selector;
	}
}
