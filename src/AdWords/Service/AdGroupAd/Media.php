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
namespace GAds\AdWords\Service\AdGroupAd;

/**
 * Represents some kind of media.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class Media
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";

	const XSI_TYPE = "Media";

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $mediaId;

	/**
	 *
	 * @access public
	 * @var tnsMediaMediaType
	 */
	public $type;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $referenceId;

	/**
	 *
	 * @access public
	 * @var Media_Size_DimensionsMapEntry[]
	 */
	public $dimensions;

	/**
	 *
	 * @access public
	 * @var Media_Size_StringMapEntry[]
	 */
	public $urls;

	/**
	 *
	 * @access public
	 * @var tnsMediaMimeType
	 */
	public $mimeType;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $sourceUrl;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 *
	 * @access public
	 * @var integer
	 */
	public $fileSize;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $creationTime;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $MediaType;

	private $_parameterMap = array(
		"Media.Type" => "MediaType"
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

	public function __construct($mediaId = null, $type = null, $referenceId = null, $dimensions = null, $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null)
	{
		$this->mediaId = $mediaId;
		$this->type = $type;
		$this->referenceId = $referenceId;
		$this->dimensions = $dimensions;
		$this->urls = $urls;
		$this->mimeType = $mimeType;
		$this->sourceUrl = $sourceUrl;
		$this->name = $name;
		$this->fileSize = $fileSize;
		$this->creationTime = $creationTime;
		$this->MediaType = $MediaType;
	}
}
