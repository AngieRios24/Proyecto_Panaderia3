<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Handles PLAIN authentication.
 *
 * @author Chris Corbyn
 */
class Swift_Transport_Esmtp_Auth_PlainAuthenticator implements Swift_Transport_Esmtp_Authenticator
{
    /**
     * Get the name of the AUTH mechanism this Authenticator handles.
     *
     * @return string
     */
    public function getAuthKeyword()
    {
        return 'PLAIN';
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(Swift_Transport_SmtpAgent $agent, $username, $password)
    {
        try {
<<<<<<< HEAD
            $message = base64_encode($username.\chr(0).$username.\chr(0).$password);
=======
            $message = base64_encode($username.chr(0).$username.chr(0).$password);
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
            $agent->executeCommand(sprintf("AUTH PLAIN %s\r\n", $message), [235]);

            return true;
        } catch (Swift_TransportException $e) {
            $agent->executeCommand("RSET\r\n", [250]);

            throw $e;
        }
    }
}
