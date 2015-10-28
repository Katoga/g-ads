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
 * Defines the required and optional elements within the header of a SOAP request.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class SoapRequestHeader
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "SoapHeader";

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $clientCustomerId;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $developerToken;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $userAgent;

	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $validateOnly;

	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $partialFailure;

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

	public function __construct($clientCustomerId = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null)
	{
		$this->clientCustomerId = $clientCustomerId;
		$this->developerToken = $developerToken;
		$this->userAgent = $userAgent;
		$this->validateOnly = $validateOnly;
		$this->partialFailure = $partialFailure;
	}
}
