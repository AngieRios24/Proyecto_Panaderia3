<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Redundantly and rotationally uses several Transport implementations when sending.
 *
 * @author Chris Corbyn
 */
class Swift_LoadBalancedTransport extends Swift_Transport_LoadBalancedTransport
{
    /**
     * Creates a new LoadBalancedTransport with $transports.
     *
     * @param array $transports
     */
    public function __construct($transports = [])
    {
<<<<<<< HEAD
        \call_user_func_array(
=======
        call_user_func_array(
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
            [$this, 'Swift_Transport_LoadBalancedTransport::__construct'],
            Swift_DependencyContainer::getInstance()
                ->createDependenciesFor('transport.loadbalanced')
            );

        $this->setTransports($transports);
    }
}
