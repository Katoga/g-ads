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
 * Represents violations of a single policy by some text in a field.
 *
 * Violations of a single policy by the same string in multiple places within a field is reported in one instance of this class and only one exemption needs to be filed.
 * Violations of a single policy by two different strings is reported as two separate instances of this class.
 *
 * e.g. If 'ACME' violates 'capitalization' and occurs twice in a text ad it would be represented by one instance.
 * If the ad also contains 'INC' which also violates 'capitalization' it would be represented in a separate instance.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class PolicyViolationError extends ApiError
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "PolicyViolationError";

	/**
	 *
	 * @access public
	 * @var PolicyViolationKey
	 */
	public $key;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $externalPolicyName;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $externalPolicyUrl;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $externalPolicyDescription;

	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $isExemptable;

	/**
	 *
	 * @access public
	 * @var PolicyViolationErrorPart[]
	 */
	public $violatingParts;

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

	public function __construct($key = null, $externalPolicyName = null, $externalPolicyUrl = null, $externalPolicyDescription = null, $isExemptable = null, $violatingParts = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct();
		$this->key = $key;
		$this->externalPolicyName = $externalPolicyName;
		$this->externalPolicyUrl = $externalPolicyUrl;
		$this->externalPolicyDescription = $externalPolicyDescription;
		$this->isExemptable = $isExemptable;
		$this->violatingParts = $violatingParts;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->errorString = $errorString;
		$this->ApiErrorType = $ApiErrorType;
	}
}
