<?php
/**
 * Copyright 2011 Google Inc.
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
namespace GAds\AdWords\Util;

/**
 * Represents a report definition.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class ReportDefinition
{

	/**
	 *
	 * @var integer
	 */
	public $id;

	/**
	 *
	 * @var Selector
	 */
	public $selector;

	/**
	 *
	 * @var string
	 */
	public $reportName;

	/**
	 *
	 * @var tnsReportDefinitionReportType
	 */
	public $reportType;

	/**
	 *
	 * @var boolean
	 */
	public $hasAttachment;

	/**
	 *
	 * @var tnsReportDefinitionDateRangeType
	 */
	public $dateRangeType;

	/**
	 *
	 * @var tnsDownloadFormat
	 */
	public $downloadFormat;

	/**
	 *
	 * @var string
	 */
	public $creationTime;

	/**
	 *
	 * @var boolean
	 */
	public $includeZeroImpressions;

	/**
	 * Gets the namesapce of this class
	 *
	 * @return the namespace of this class
	 */
	public function getNamespace()
	{
		return "";
	}

	/**
	 * Gets the xsi:type name of this class
	 *
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName()
	{
		return "ReportDefinition";
	}

	public function __construct($id = null, $selector = null, $reportName = null, $reportType = null, $hasAttachment = null, $dateRangeType = null, $downloadFormat = null, $creationTime = null, $includeZeroImpressions = null)
	{
		$this->id = $id;
		$this->selector = $selector;
		$this->reportName = $reportName;
		$this->reportType = $reportType;
		$this->hasAttachment = $hasAttachment;
		$this->dateRangeType = $dateRangeType;
		$this->downloadFormat = $downloadFormat;
		$this->creationTime = $creationTime;
		$this->includeZeroImpressions = $includeZeroImpressions;
	}
}
