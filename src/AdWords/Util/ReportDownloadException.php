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
 * Exception class for an error that occurs while downloading a report.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class ReportDownloadException extends \Exception
{

	/**
	 * Constructor for ReportDownloadException.
	 *
	 * @param string $error an optional error message
	 * @param string $httpCode an optional HTTP status code of the response
	 */
	public function __construct($error = null, $httpCode = null)
	{
		if (empty($error)) {
			$error = 'Report download failed with status code: ' . $httpCode;
		}
		parent::__construct($error, $httpCode);
	}
}
