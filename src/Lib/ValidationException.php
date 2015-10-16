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

namespace GAds\Lib;

/**
 * Exception class for any client library validation error.
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class ValidationException extends Exception
{

  const EXCEPTION_FORMAT = 'Validation failed for [%s] with value [%s]: %s';

  /**
   * The trigger for the validation exception.
   *
   * @var string
   */
  protected $trigger;

  /**
   * Constructor for ValidationException where the exception will appear
   * as "Validation failed for [$trigger] with value [$value]: $message".
   *
   * @param string $trigger the trigger for the validation error
   * @param string $value the value for the trigger
   * @param string $message the message representing the error in validation
   */
  public function __construct($trigger, $value, $message)
  {
    $this->trigger = $trigger;
    parent::__construct(sprintf(self::EXCEPTION_FORMAT, $trigger, $value, $message));
  }

  /**
   * Get the trigger for the validation error.
   *
   * @return string the trigger for the validation error.
   */
  public function GetTrigger()
  {
    return $this->trigger;
  }
}
