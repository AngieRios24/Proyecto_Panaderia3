<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel;

/**
 * Allows the Kernel to be rebooted using a temporary cache directory.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface RebootableInterface
{
    /**
     * Reboots a kernel.
     *
<<<<<<< HEAD
     * The getBuildDir() method of a rebootable kernel should not be called
     * while building the container. Use the %kernel.build_dir% parameter instead.
     *
     * @param string|null $warmupDir pass null to reboot in the regular build directory
=======
     * The getCacheDir() method of a rebootable kernel should not be called
     * while building the container. Use the %kernel.cache_dir% parameter instead.
     *
     * @param string|null $warmupDir pass null to reboot in the regular cache directory
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
     */
    public function reboot(?string $warmupDir);
}
