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
namespace GAds\AdWords\Service\AdGroupBidModifier;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 * Gets ad group level criterion bid modifiers.
 *
 * @param selector The selector specifying the {@link AdGroupBidModifier}s to return.
 * @return A list of ad group bid modifiers.
 * @throws ApiException when there is at least one error with the request.
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdGroupBidModifierServiceGet
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

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
