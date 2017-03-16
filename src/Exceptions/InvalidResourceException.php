<?php

/**
 * This file contains the HttpException
 *
 * @copyright 2017 David Sierra
 * @license   https://github.com/allejo/PhpSoda/blob/master/LICENSE.md MIT
 */

namespace Davidsierradz\Socrata\Exceptions;

/**
 * An exception thrown if a given dataset's resource ID is invalid
 *
 * @package Davidsierradz\Socrata\Exceptions
 * @since   0.1.0
 */
class InvalidResourceException extends \Exception
{
    /**
     * Create an exception
     *
     * @param string $message The message of the exception
     *
     * @since 0.1.0
     */
    public function __construct ($message)
    {
        $this->message = $message;
    }
}
