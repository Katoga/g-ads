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
namespace GAds\AdWords\Service\AdParam;

/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, REMOVE.</span>
 *
 *
 *
 * Sets and removes ad parameters.
 * <p class="note"><b>Note:</b> {@code ADD} is not supported. Use {@code SET} for new ad parameters.</p>
 *
 * <ul class="nolist">
 * <li>{@code SET}: Creates or updates an ad parameter, setting the new parameterized value for the given ad group / keyword pair.
 * <li>{@code REMOVE}: Removes an ad parameter. The <code><var>default-value</var> </code> specified in the ad text will be used.</li>
 * </ul>
 *
 * @param operations The operations to perform.
 * @return A list of ad parameters, where each entry in the list is the
 *         result of applying the operation in the input list with the same index.
 *         For a {@code SET} operation, the returned ad parameter will contain the
 *         updated values. For a {@code REMOVE} operation, the returned ad parameter
 *         will simply be the ad parameter that was removed.
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdParamServiceMutate
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "";

	/**
	 *
	 * @access public
	 * @var AdParamOperation[]
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
