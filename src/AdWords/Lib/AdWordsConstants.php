<?php
/**
 * Copyright 2012 Google Inc.
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

/**
 * Useful constants for the AdWords API.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class AdWordsConstants
{

  /**
   * Recommended page size for most services.
   *
   * @var int
   */
  const RECOMMENDED_PAGE_SIZE = 500;

  /**
   * The number of micros in a dollar (or equivalent curreny unit).
   *
   * @var int
   */
  const MICROS_PER_DOLLAR = 1000000;

  /**
   * The number of micro degrees in a degree.
   *
   * @var int
   */
  const MICRO_DEGREES_PER_DEGREE = 1000000;
}
