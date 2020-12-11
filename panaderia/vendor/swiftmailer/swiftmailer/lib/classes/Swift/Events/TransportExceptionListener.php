<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Listens for Exceptions thrown from within the Transport system.
 *
 * @author Chris Corbyn
 */
interface Swift_Events_TransportExceptionListener extends Swift_Events_EventListener
{
    /**
     * Invoked as a TransportException is thrown in the Transport system.
<<<<<<< HEAD
=======
     *
     * @param Swift_Events_TransportExceptionEvent $evt
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
     */
    public function exceptionThrown(Swift_Events_TransportExceptionEvent $evt);
}
