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
 * Contains base extension feed item data for an extension in an extension feed managed by AdWords.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class ExtensionFeedItem
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "ExtensionFeedItem";

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $feedId;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $feedItemId;

	/**
	 *
	 * @access public
	 * @var tnsFeedItemStatus
	 */
	public $status;

	/**
	 *
	 * @access public
	 * @var tnsFeedType
	 */
	public $feedType;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $startTime;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $endTime;

	/**
	 *
	 * @access public
	 * @var FeedItemDevicePreference
	 */
	public $devicePreference;

	/**
	 *
	 * @access public
	 * @var FeedItemScheduling
	 */
	public $scheduling;

	/**
	 *
	 * @access public
	 * @var FeedItemPolicyData[]
	 */
	public $policyData;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $ExtensionFeedItemType;

	private $_parameterMap = array(
		"ExtensionFeedItem.Type" => "ExtensionFeedItemType"
	);

	/**
	 * Provided for setting non-php-standard named variables
	 *
	 * @param $var Variable name to set
	 * @param $value Value to set
	 */
	public function __set($var, $value)
	{
		$this->{$this->_parameterMap[$var]} = $value;
	}

	/**
	 * Provided for getting non-php-standard named variables
	 *
	 * @param $var Variable name to get
	 * @return mixed Variable value
	 */
	public function __get($var)
	{
		if (!isset($this->_parameterMap[$var])) {
			return null;
		}
		return $this->{$this->_parameterMap[$var]};
	}

	/**
	 * Provided for getting non-php-standard named variables
	 *
	 * @return array parameter map
	 */
	protected function getParameterMap()
	{
		return $this->_parameterMap;
	}

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

	public function __construct($feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, $policyData = null, $ExtensionFeedItemType = null)
	{
		$this->feedId = $feedId;
		$this->feedItemId = $feedItemId;
		$this->status = $status;
		$this->feedType = $feedType;
		$this->startTime = $startTime;
		$this->endTime = $endTime;
		$this->devicePreference = $devicePreference;
		$this->scheduling = $scheduling;
		$this->policyData = $policyData;
		$this->ExtensionFeedItemType = $ExtensionFeedItemType;
	}
}
