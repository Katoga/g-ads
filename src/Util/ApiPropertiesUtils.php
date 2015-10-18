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
namespace GAds\Util;

/**
 * A collection of utility methods for reading API property files.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class ApiPropertiesUtils
{

  /**
   * Parses the specified API properties file.
   *
   * @param string $propsFilePath the path to the API properties file to parse
   * @return array the parsed properties
   */
  public static function ParseApiPropertiesFile($propsFilePath)
  {
    return parse_ini_file($propsFilePath);
  }
}
