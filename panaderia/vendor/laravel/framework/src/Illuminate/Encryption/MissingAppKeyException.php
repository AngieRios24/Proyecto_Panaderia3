<?php

namespace Illuminate\Encryption;

use RuntimeException;

class MissingAppKeyException extends RuntimeException
{
    /**
     * Create a new exception instance.
     *
<<<<<<< HEAD
     * @param  string  $message
=======
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
     * @return void
     */
    public function __construct($message = 'No application encryption key has been specified.')
    {
        parent::__construct($message);
    }
}
