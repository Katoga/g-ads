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
namespace GAds\AdWords\Service\BudgetSuggestion;

/**
 * A currency, as defined by Unicode's "CLDR", itself based on ISO 4217.
 * Note that this list does not normally list currencies that have never been the official (or de facto) currency of a country.
 * That means that it excludes
 * <ul>
 * <li>Fund codes, like BOV Bolivia Mvdol</li>
 * <li>Precious metals, like XAU Gold</li>
 * <li>Other codes of limited usage, like XRE RINET Funds Code</li>
 * </ul>
 * <p>This class does not supply methods for getting information about currencies.
 * For those methods, see {@link java/com/google/i18n/identifiers/CurrencyInfo.java}.
 * The codes are in alphabetical order by code, to prevent the lines from moving around in the list if the common name changes.
 *
 * See:
 *
 * http://www.unicode.org/cldr/data/common/supplemental/supplementalData.xml
 * http://www.unicode.org/cldr/data/diff/supplemental/supplemental.html
 *
 * It contains no behavior, but is the authoritative definition of Currency <em>identity</em> in java Google code.
 * <p>
 * Do:
 * <ul>
 * <li>use it everywhere you need to compare currencies</li>
 * <li>use it in all APIs that take/return a currency, particularly ones you expose to other projects/subsystems</li>
 * <li>get the instance corresponding to an ISO code using {@link #valueOf}</li>
 * <li>get the String ISO code with {@link name}</li>
 * <li>use the String ISO code in your DB as a key to currencies</li>
 * <li>put your project-specific currency-related information in a class under your project root, using an EnumMap to map Currencies to these objects. </li>
 * </ul>
 *
 * <p>Do <em>not</em>:
 * <ul>
 * <li>depend on the ordinal of a currency, for example using {@link #ordinal} or depending on the index of a particular currency in the {@link #values} array.
 * <li>depend on the comparison order of currencies, via {@link #compareTo}), or via the iteration order of an EnumSet, etc.
 * </ul>
 *
 * <p>This enum does not:
 * <ul>
 * <li>have i18n features</li>
 * <li>have application-specific data (say "billable unit")</li>
 * </ul>
 *
 * <p>These concerns will be addressed by other classes, some in application-specific packages, others in common.base.i18n.
 * The latter ones will be listed with "see" tags in this class.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class CurrencyCode
{

	const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201509";

	const XSI_TYPE = "CurrencyCode";

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

	public function __construct()
	{}
}
