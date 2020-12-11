<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Driver;

use RuntimeException;
use SebastianBergmann\CodeCoverage\Exception;

final class Xdebug2NotEnabledException extends RuntimeException implements Exception
{
    public function __construct()
    {
<<<<<<< HEAD
        parent::__construct('xdebug.coverage_enable=On has to be set');
=======
        parent::__construct('xdebug.coverage_enable=On has to be set in php.ini');
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    }
}
