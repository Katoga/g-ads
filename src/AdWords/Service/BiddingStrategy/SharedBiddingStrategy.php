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
namespace GAds\AdWords\Service\BiddingStrategy;

/**
 * Bidding strategies store shared bidding configuration data and are account-level objects.
 * 
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class SharedBiddingStrategy
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "SharedBiddingStrategy";

	/**
	 *
	 * @access public
	 * @var BiddingScheme
	 */
	public $biddingScheme;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $id;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 *
	 * @access public
	 * @var tnsSharedBiddingStrategyBiddingStrategyStatus
	 */
	public $status;

	/**
	 *
	 * @access public
	 * @var tnsBiddingStrategyType
	 */
	public $type;

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

	public function __construct($biddingScheme = null, $id = null, $name = null, $status = null, $type = null)
	{
		$this->biddingScheme = $biddingScheme;
		$this->id = $id;
		$this->name = $name;
		$this->status = $status;
		$this->type = $type;
	}
}
