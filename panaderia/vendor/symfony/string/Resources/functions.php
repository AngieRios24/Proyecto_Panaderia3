<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\String;

<<<<<<< HEAD
function u(?string $string = ''): UnicodeString
{
    return new UnicodeString($string ?? '');
}

function b(?string $string = ''): ByteString
{
    return new ByteString($string ?? '');
=======
function u(string $string = ''): UnicodeString
{
    return new UnicodeString($string);
}

function b(string $string = ''): ByteString
{
    return new ByteString($string);
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
}

/**
 * @return UnicodeString|ByteString
 */
<<<<<<< HEAD
function s(?string $string = ''): AbstractString
{
    $string = $string ?? '';

=======
function s(string $string): AbstractString
{
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    return preg_match('//u', $string) ? new UnicodeString($string) : new ByteString($string);
}
