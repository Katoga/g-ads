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
namespace GAds\AdWords\Service\Campaign;

/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
 *
 * Adds, updates, or removes campaigns.
 * <p class="note"><b>Note:</b> {@link CampaignOperation} does not support the
 * <code>REMOVE</code> operator. To remove a campaign, set its
 * {@link Campaign#status status} to {@code REMOVED}.</p>
 *
 * @param operations A list of unique operations. The same campaign cannot be specified in more than one operation.
 * @return The list of updated campaigns, returned in the same order as the <code>operations</code> array.
 * @throws ApiException if problems occurred while updating campaign information.
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class CampaignServiceMutate
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "";

	/**
	 *
	 * @access public
	 * @var CampaignOperation[]
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
