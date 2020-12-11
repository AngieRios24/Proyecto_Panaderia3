<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime\Encoder;

<<<<<<< HEAD
=======
use Symfony\Component\Mime\Exception\AddressEncoderException;

>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
/**
 * An IDN email address encoder.
 *
 * Encodes the domain part of an address using IDN. This is compatible will all
 * SMTP servers.
 *
<<<<<<< HEAD
 * Note: It leaves the local part as is. In case there are non-ASCII characters
 * in the local part then it depends on the SMTP Server if this is supported.
=======
 * This encoder does not support email addresses with non-ASCII characters in
 * local-part (the substring before @).
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
 *
 * @author Christian Schmidt
 */
final class IdnAddressEncoder implements AddressEncoderInterface
{
    /**
     * Encodes the domain part of an address using IDN.
<<<<<<< HEAD
=======
     *
     * @throws AddressEncoderException If local-part contains non-ASCII characters
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
     */
    public function encodeString(string $address): string
    {
        $i = strrpos($address, '@');
        if (false !== $i) {
            $local = substr($address, 0, $i);
            $domain = substr($address, $i + 1);

<<<<<<< HEAD
=======
            if (preg_match('/[^\x00-\x7F]/', $local)) {
                throw new AddressEncoderException(sprintf('Non-ASCII characters not supported in local-part os "%s".', $address));
            }

>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
            if (preg_match('/[^\x00-\x7F]/', $domain)) {
                $address = sprintf('%s@%s', $local, idn_to_ascii($domain, 0, \INTL_IDNA_VARIANT_UTS46));
            }
        }

        return $address;
    }
}
