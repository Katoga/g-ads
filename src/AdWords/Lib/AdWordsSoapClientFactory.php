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
namespace GAds\AdWords\Lib;

use GAds\Lib\AdsUser;
use GAds\Lib\SoapClientFactory;

/**
 * Factory class for SOAP clients for the AdWords API.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdWordsSoapClientFactory extends SoapClientFactory
{

	/**
	 * The constructor for the AdWords API SOAP client factory.
	 *
	 * @param AdsUser $user the user which the client will use for credentials
	 * @param string $server the server to generate clients for
	 * @param bool $validateOnly if the clients should be created in validateOnly mode
	 * @param bool $partialFailure if the service should be created in partialFailure mode
	 */
	public function __construct(AdsUser $user, $server, $validateOnly, $partialFailure)
	{
		if ($user->GetHeaderValue('clientEmail') != null) {
			throw new \Exception('The header "clientEmail" is not compatible with versions v201109 and later. Use clientCustomerId instead.');
		}
		$headerOverrides = array();
		if (isset($validateOnly) || isset($partialFailure)) {
			$headerOverrides['validateOnly'] = $validateOnly;
			$headerOverrides['partialFailure'] = $partialFailure;
		}
		parent::__construct($user, $server, 'adwords', $headerOverrides);
	}
}
