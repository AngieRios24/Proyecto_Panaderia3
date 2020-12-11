<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2020 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\VersionUpdater;

interface Checker
{
<<<<<<< HEAD
    const ALWAYS = 'always';
    const DAILY = 'daily';
    const WEEKLY = 'weekly';
    const MONTHLY = 'monthly';
    const NEVER = 'never';
=======
    const ALWAYS  = 'always';
    const DAILY   = 'daily';
    const WEEKLY  = 'weekly';
    const MONTHLY = 'monthly';
    const NEVER   = 'never';
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

    /**
     * @return bool
     */
    public function isLatest();

    /**
     * @return string
     */
    public function getLatest();
}
