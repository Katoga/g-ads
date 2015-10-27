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
namespace GAds\AdWords\Service\AdGroupAd;

/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : ADD, REMOVE.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
 *
 * Adds labels to the AdGroupAd or removes labels from the AdGroupAd.
 * <p>Add - Apply an existing label to an existing {@linkplain AdGroupAd ad group ad}.
 * The {@code adGroupId} and {@code adId} must reference an existing {@linkplain AdGroupAd ad group ad}.
 * The {@code labelId} must reference an existing {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.
 * <p>Remove - Removes the link between the specified {@linkplain AdGroupAd ad group ad} and {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
 *
 * @param operations The operations to apply.
 * @return A list of AdGroupAdLabel where each entry in the list is the result of
 *         applying the operation in the input list with the same index. For an
 *         add operation, the returned AdGroupAdLabel contains the AdGroupId, AdId and the LabelId.
 *         In the case of a remove operation, the returned AdGroupAdLabel will only have AdGroupId and
 *         AdId.
 * @throws ApiException when there are one or more errors with the request.
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class MutateLabel
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "";

	/**
	 *
	 * @access public
	 * @var AdGroupAdLabelOperation[]
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
