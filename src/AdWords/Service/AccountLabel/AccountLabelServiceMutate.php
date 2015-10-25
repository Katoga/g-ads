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
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
 *
 * Possible actions:
 * <ul>
 * <li> Create a new label - create a new {@link Label} and call mutate with ADD operator
 * <li> Edit the label name - set the appropriate fields in your {@linkplain Label} and call mutate with the SET operator. Null fields will be interpreted to mean "no change"
 * <li> Delete the label - call mutate with REMOVE operator
 * </ul>
 *
 * @param operations list of unique operations to be executed in a single transaction, in the order specified.
 * @return the mutated labels, in the same order that they were in as the parameter
 * @throws ApiException if problems occurs while modifying label information
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AccountLabelServiceMutate
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201509";

	const XSI_TYPE = "";

	/**
	 *
	 * @access public
	 * @var AccountLabelOperation[]
	 */
	public $operations;

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

	public function __construct($operations = null)
	{
		$this->operations = $operations;
	}
}
