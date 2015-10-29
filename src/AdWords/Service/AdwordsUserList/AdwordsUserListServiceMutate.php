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
 * <span class="constraint CollectionSize">The minimum size of this collection is 1. The maximum size of this collection is 10000.</span>
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
 *
 * Applies a list of mutate operations (i.e. add, set):
 *
 * Add - creates a set of user lists
 * Set - updates a set of user lists
 * Remove - not supported
 *
 * @param operations the operations to apply
 * @return a list of UserList objects
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdwordsUserListServiceMutate
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201509";

	const XSI_TYPE = "";

	/**
	 *
	 * @access public
	 * @var UserListOperation[]
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
