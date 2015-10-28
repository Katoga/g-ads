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
 * A constant operand in a matching function.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class ConstantOperand extends FunctionArgumentOperand
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "ConstantOperand";

	/**
	 *
	 * @access public
	 * @var tnsConstantOperandConstantType
	 */
	public $type;

	/**
	 *
	 * @access public
	 * @var tnsConstantOperandUnit
	 */
	public $unit;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $longValue;

	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $booleanValue;

	/**
	 *
	 * @access public
	 * @var double
	 */
	public $doubleValue;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $stringValue;

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

	public function __construct($type = null, $unit = null, $longValue = null, $booleanValue = null, $doubleValue = null, $stringValue = null, $FunctionArgumentOperandType = null)
	{
		parent::__construct();
		$this->type = $type;
		$this->unit = $unit;
		$this->longValue = $longValue;
		$this->booleanValue = $booleanValue;
		$this->doubleValue = $doubleValue;
		$this->stringValue = $stringValue;
		$this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
	}
}
