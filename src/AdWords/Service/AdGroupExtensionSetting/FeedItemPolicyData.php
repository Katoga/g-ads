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
namespace GAds\AdWords\Service\AdGroupExtensionSetting;

/**
 * Contains offline-validation and approval results for a given FeedItem and FeedMapping.
 * Each validation data indicates any issues found on the feed item when used in the context of the feed mapping.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class FeedItemPolicyData extends PolicyData
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "FeedItemPolicyData";

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $placeholderType;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $feedMappingId;

	/**
	 *
	 * @access public
	 * @var tnsFeedItemValidationStatus
	 */
	public $validationStatus;

	/**
	 *
	 * @access public
	 * @var tnsFeedItemApprovalStatus
	 */
	public $approvalStatus;

	/**
	 *
	 * @access public
	 * @var FeedItemAttributeError[]
	 */
	public $validationErrors;

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

	public function __construct($placeholderType = null, $feedMappingId = null, $validationStatus = null, $approvalStatus = null, $validationErrors = null, $disapprovalReasons = null, $PolicyDataType = null)
	{
		parent::__construct();
		$this->placeholderType = $placeholderType;
		$this->feedMappingId = $feedMappingId;
		$this->validationStatus = $validationStatus;
		$this->approvalStatus = $approvalStatus;
		$this->validationErrors = $validationErrors;
		$this->disapprovalReasons = $disapprovalReasons;
		$this->PolicyDataType = $PolicyDataType;
	}
}
