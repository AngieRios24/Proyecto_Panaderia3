<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Observes changes for a Mime entity's ContentEncoder.
 *
 * @author Chris Corbyn
 */
interface Swift_Mime_EncodingObserver
{
    /**
     * Notify this observer that the observed entity's ContentEncoder has changed.
<<<<<<< HEAD
=======
     *
     * @param Swift_Mime_ContentEncoder $encoder
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
     */
    public function encoderChanged(Swift_Mime_ContentEncoder $encoder);
}
