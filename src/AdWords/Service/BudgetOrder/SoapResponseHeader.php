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
namespace GAds\AdWords\Service\BudgetOrder;

/**
 * Defines the elements within the header of a SOAP response.
 *
 * The API error base class that provides details about an error that occurred while processing a service request.
 *
 * <p>The OGNL field path is provided for parsers to identify the request data element that may have caused the error.</p>
 *
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class SoapResponseHeader
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "SoapResponseHeader";

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $requestId;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $serviceName;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $methodName;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $operations;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $responseTime;

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

	public function __construct($requestId = null, $serviceName = null, $methodName = null, $operations = null, $responseTime = null)
	{
		$this->requestId = $requestId;
		$this->serviceName = $serviceName;
		$this->methodName = $methodName;
		$this->operations = $operations;
		$this->responseTime = $responseTime;
	}
}
