<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2020 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\TabCompletion\Matcher;

/**
 * A MongoDB tab completion Matcher.
 *
 * This matcher provides completion for Mongo collection names.
 *
 * @author Marc Garcia <markcial@gmail.com>
 */
class MongoDatabaseMatcher extends AbstractContextAwareMatcher
{
    /**
     * {@inheritdoc}
     */
    public function getMatches(array $tokens, array $info = [])
    {
        $input = $this->getInput($tokens);

        $firstToken = \array_pop($tokens);
        if (self::tokenIs($firstToken, self::T_STRING)) {
            // second token is the object operator
            \array_pop($tokens);
        }
        $objectToken = \array_pop($tokens);
<<<<<<< HEAD
        $objectName = \str_replace('$', '', $objectToken[1]);
        $object = $this->getVariable($objectName);
=======
        $objectName  = \str_replace('$', '', $objectToken[1]);
        $object      = $this->getVariable($objectName);
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

        if (!$object instanceof \MongoDB) {
            return [];
        }

        return \array_filter(
            $object->getCollectionNames(),
            function ($var) use ($input) {
                return AbstractMatcher::startsWith($input, $var);
            }
        );
    }

    /**
     * {@inheritdoc}
     */
    public function hasMatched(array $tokens)
    {
<<<<<<< HEAD
        $token = \array_pop($tokens);
=======
        $token     = \array_pop($tokens);
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
        $prevToken = \array_pop($tokens);

        switch (true) {
            case self::tokenIs($token, self::T_OBJECT_OPERATOR):
            case self::tokenIs($prevToken, self::T_OBJECT_OPERATOR):
                return true;
        }

        return false;
    }
}
