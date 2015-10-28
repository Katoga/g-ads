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
namespace GAds\AdWords\Service\AdGroupFeed;

/**
 * AdGroupFeeds are used to link a feed to an adgroup using a matching function, making the feed's feed items available in the adgroup's ads for substitution.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdGroupFeed
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "AdGroupFeed";

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
	public $adGroupId;

	/**
	 *
	 * @access public
	 * @var Function
	 */
	public $matchingFunction;

	/**
	 *
	 * @access public
	 * @var integer[]
	 */
	public $placeholderTypes;

	/**
	 *
	 * @access public
	 * @var tnsAdGroupFeedStatus
	 */
	public $status;

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

	public function __construct($feedId = null, $adGroupId = null, $matchingFunction = null, $placeholderTypes = null, $status = null)
	{
		$this->feedId = $feedId;
		$this->adGroupId = $adGroupId;
		$this->matchingFunction = $matchingFunction;
		$this->placeholderTypes = $placeholderTypes;
		$this->status = $status;
	}
}
