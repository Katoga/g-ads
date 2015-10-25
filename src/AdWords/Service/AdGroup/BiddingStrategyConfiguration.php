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
namespace GAds\AdWords\Service\AdGroup;

/**
 * Encapsulates the information about bids and bidding strategies.
 *
 * <p>Bidding Strategy can be set on campaigns, ad groups or ad group criteria.
 * <p>A bidding strategy can be set using one of the following:
 * <ul>
 * <li>{@linkplain BiddingStrategyConfiguration#biddingScheme bidding scheme}</li>
 * <li>{@linkplain BiddingStrategyConfiguration#biddingStrategyType bidding strategy type}</li>
 * <li>{@linkplain BiddingStrategyConfiguration#biddingStrategyId bidding strategy ID} for flexible bid strategies.</li>
 * </ul>
 * <p>If the bidding strategy type is used, then schemes are created using default values.
 *
 * <p>Bids can be set only on ad groups and ad group criteria. They cannot be set on campaigns.
 * Multiple bids can be set at the same time. Only the bids that apply to the effective bidding strategy will be used.
 * Effective bidding strategy is considered to be the directly attached strategy or inherited strategy from above level(s) when there is no directly attached strategy.
 *
 * <p>For more information on flexible bidding, visit the <a href="https://support.google.com/adwords/answer/2979071">Help Center</a>.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class BiddingStrategyConfiguration
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "BiddingStrategyConfiguration";

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $biddingStrategyId;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $biddingStrategyName;

	/**
	 *
	 * @access public
	 * @var tnsBiddingStrategyType
	 */
	public $biddingStrategyType;

	/**
	 *
	 * @access public
	 * @var tnsBiddingStrategySource
	 */
	public $biddingStrategySource;

	/**
	 *
	 * @access public
	 * @var BiddingScheme
	 */
	public $biddingScheme;

	/**
	 *
	 * @access public
	 * @var Bids[]
	 */
	public $bids;

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

	public function __construct($biddingStrategyId = null, $biddingStrategyName = null, $biddingStrategyType = null, $biddingStrategySource = null, $biddingScheme = null, $bids = null)
	{
		$this->biddingStrategyId = $biddingStrategyId;
		$this->biddingStrategyName = $biddingStrategyName;
		$this->biddingStrategyType = $biddingStrategyType;
		$this->biddingStrategySource = $biddingStrategySource;
		$this->biddingScheme = $biddingScheme;
		$this->bids = $bids;
	}
}
