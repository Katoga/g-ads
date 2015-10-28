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
 * Represents a function where its operator is applied to its argument operands resulting in a return value.
 * It has the form (Operand... Operator Operand...).
 * The type of the return value depends on the operator being applied and the type of the operands.
 *
 * <p class="special">Operands per function is limited to <b>20</b>.</p>
 *
 * <p>Here is a code example:</p>
 *
 * <pre><code>
 *
 * // For example "feed_attribute == 30" can be represented as:
 * FeedId feedId = (FeedId of Feed associated with feed_attribute)
 * FeedAttributeId feedAttributeId = (FeedAttributeId of feed_attribute)
 * Function function = new Function();
 * function.setLhsOperand( Arrays.asList((Operand) new FeedAttributeOperand(feedId, feedAttributeId)));
 * function.setOperator(Operator.IN);
 * function.setRhsOperand( Arrays.asList((Operand) new ConstantOperand(30L)));
 *
 * // Another example matching on multiple values:
 * "feed_item_id IN (10, 20, 30)" can be represented as:
 *
 * Function function = new Function();
 * function.setLhsOperand( Arrays.asList((Operand) new RequestContextOperand(ContextType.FEED_ITEM_ID)));
 * function.setOperator(Operator.IN);
 * function.setRhsOperand(Arrays.asList( (Operand) new ConstantOperand(10L), new ConstantOperand(20L), new ConstantOperand(30L)));
 * </code></pre>
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class FeedFunction
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "Function";

	/**
	 *
	 * @access public
	 * @var tnsFunctionOperator
	 */
	public $operator;

	/**
	 *
	 * @access public
	 * @var FunctionArgumentOperand[]
	 */
	public $lhsOperand;

	/**
	 *
	 * @access public
	 * @var FunctionArgumentOperand[]
	 */
	public $rhsOperand;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $functionString;

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

	public function __construct($operator = null, $lhsOperand = null, $rhsOperand = null, $functionString = null)
	{
		$this->operator = $operator;
		$this->lhsOperand = $lhsOperand;
		$this->rhsOperand = $rhsOperand;
		$this->functionString = $functionString;
	}
}
