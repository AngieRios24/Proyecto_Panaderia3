<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2009 Fabien Potencier <fabien.potencier@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Pretends messages have been sent, but just ignores them.
 *
 * @author Fabien Potencier
 */
class Swift_NullTransport extends Swift_Transport_NullTransport
{
    public function __construct()
    {
<<<<<<< HEAD
        \call_user_func_array(
=======
        call_user_func_array(
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
            [$this, 'Swift_Transport_NullTransport::__construct'],
            Swift_DependencyContainer::getInstance()
                ->createDependenciesFor('transport.null')
        );
    }
}
