<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2020 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Reflection;

/**
 * @deprecated ReflectionConstant is now ReflectionClassConstant. This class
 *             name will be reclaimed in the next stable release, to be used for
 *             ReflectionConstant_ :)
 */
class ReflectionConstant extends ReflectionClassConstant
{
    /**
     * {inheritDoc}.
     */
    public function __construct($class, $name)
    {
<<<<<<< HEAD
        @\trigger_error('ReflectionConstant is now ReflectionClassConstant', \E_USER_DEPRECATED);
=======
        @\trigger_error('ReflectionConstant is now ReflectionClassConstant', E_USER_DEPRECATED);
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

        parent::__construct($class, $name);
    }
}
