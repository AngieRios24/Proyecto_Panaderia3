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

abstract class AbstractDefaultParametersMatcher extends AbstractContextAwareMatcher
{
    /**
     * @param \ReflectionParameter[] $reflectionParameters
     *
     * @return array
     */
    public function getDefaultParameterCompletion(array $reflectionParameters)
    {
        $parametersProcessed = [];

        foreach ($reflectionParameters as $parameter) {
            if (!$parameter->isDefaultValueAvailable()) {
                return [];
            }

            $defaultValue = $this->valueToShortString($parameter->getDefaultValue());

            $parametersProcessed[] = "\${$parameter->getName()} = $defaultValue";
        }

        if (empty($parametersProcessed)) {
            return [];
        }

<<<<<<< HEAD
        return [\implode(', ', $parametersProcessed).')'];
=======
        return [\implode(', ', $parametersProcessed) . ')'];
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    }

    /**
     * Takes in the default value of a parameter and turns it into a
     *  string representation that fits inline.
     * This is not 100% true to the original (newlines are inlined, for example).
     *
     * @param mixed $value
     *
     * @return string
     */
    private function valueToShortString($value)
    {
        if (!\is_array($value)) {
            return \json_encode($value);
        }

        $chunks = [];
        $chunksSequential = [];

        $allSequential = true;

        foreach ($value as $key => $item) {
            $allSequential = $allSequential && \is_numeric($key) && $key === \count($chunksSequential);

<<<<<<< HEAD
            $keyString = $this->valueToShortString($key);
=======
            $keyString  = $this->valueToShortString($key);
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
            $itemString = $this->valueToShortString($item);

            $chunks[] = "{$keyString} => {$itemString}";
            $chunksSequential[] = $itemString;
        }

        $chunksToImplode = $allSequential ? $chunksSequential : $chunks;

<<<<<<< HEAD
        return '['.\implode(', ', $chunksToImplode).']';
=======
        return '[' . \implode(', ', $chunksToImplode) . ']';
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    }
}
