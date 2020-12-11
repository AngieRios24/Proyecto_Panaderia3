<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Builder;

use function array_map;
use function array_merge;
use function count;
<<<<<<< HEAD
use function in_array;
use function is_string;
=======
use function get_class;
use function gettype;
use function in_array;
use function is_object;
use function is_string;
use function sprintf;
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
use function strtolower;
use PHPUnit\Framework\Constraint\Constraint;
use PHPUnit\Framework\MockObject\ConfigurableMethod;
use PHPUnit\Framework\MockObject\IncompatibleReturnValueException;
use PHPUnit\Framework\MockObject\InvocationHandler;
use PHPUnit\Framework\MockObject\Matcher;
<<<<<<< HEAD
use PHPUnit\Framework\MockObject\MatcherAlreadyRegisteredException;
use PHPUnit\Framework\MockObject\MethodCannotBeConfiguredException;
use PHPUnit\Framework\MockObject\MethodNameAlreadyConfiguredException;
use PHPUnit\Framework\MockObject\MethodNameNotConfiguredException;
use PHPUnit\Framework\MockObject\MethodParametersAlreadyConfiguredException;
use PHPUnit\Framework\MockObject\Rule;
=======
use PHPUnit\Framework\MockObject\Rule;
use PHPUnit\Framework\MockObject\RuntimeException;
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
use PHPUnit\Framework\MockObject\Stub\ConsecutiveCalls;
use PHPUnit\Framework\MockObject\Stub\Exception;
use PHPUnit\Framework\MockObject\Stub\ReturnArgument;
use PHPUnit\Framework\MockObject\Stub\ReturnCallback;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;
use PHPUnit\Framework\MockObject\Stub\ReturnSelf;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;
use PHPUnit\Framework\MockObject\Stub\ReturnValueMap;
use PHPUnit\Framework\MockObject\Stub\Stub;
use Throwable;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class InvocationMocker implements InvocationStubber, MethodNameMatch
{
    /**
     * @var InvocationHandler
     */
    private $invocationHandler;

    /**
     * @var Matcher
     */
    private $matcher;

    /**
     * @var ConfigurableMethod[]
     */
    private $configurableMethods;

    public function __construct(InvocationHandler $handler, Matcher $matcher, ConfigurableMethod ...$configurableMethods)
    {
        $this->invocationHandler   = $handler;
        $this->matcher             = $matcher;
        $this->configurableMethods = $configurableMethods;
    }

    /**
<<<<<<< HEAD
     * @throws MatcherAlreadyRegisteredException
     *
=======
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
     * @return $this
     */
    public function id($id): self
    {
        $this->invocationHandler->registerMatcher($id, $this->matcher);

        return $this;
    }

    /**
     * @return $this
     */
    public function will(Stub $stub): Identity
    {
        $this->matcher->setStub($stub);

        return $this;
    }

<<<<<<< HEAD
    /**
     * @param mixed   $value
     * @param mixed[] $nextValues
     *
     * @throws IncompatibleReturnValueException
     */
=======
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    public function willReturn($value, ...$nextValues): self
    {
        if (count($nextValues) === 0) {
            $this->ensureTypeOfReturnValues([$value]);

            $stub = $value instanceof Stub ? $value : new ReturnStub($value);
        } else {
            $values = array_merge([$value], $nextValues);

            $this->ensureTypeOfReturnValues($values);

            $stub = new ConsecutiveCalls($values);
        }

        return $this->will($stub);
    }

    public function willReturnReference(&$reference): self
    {
        $stub = new ReturnReference($reference);

        return $this->will($stub);
    }

    public function willReturnMap(array $valueMap): self
    {
        $stub = new ReturnValueMap($valueMap);

        return $this->will($stub);
    }

    public function willReturnArgument($argumentIndex): self
    {
        $stub = new ReturnArgument($argumentIndex);

        return $this->will($stub);
    }

    public function willReturnCallback($callback): self
    {
        $stub = new ReturnCallback($callback);

        return $this->will($stub);
    }

    public function willReturnSelf(): self
    {
        $stub = new ReturnSelf;

        return $this->will($stub);
    }

    public function willReturnOnConsecutiveCalls(...$values): self
    {
        $stub = new ConsecutiveCalls($values);

        return $this->will($stub);
    }

    public function willThrowException(Throwable $exception): self
    {
        $stub = new Exception($exception);

        return $this->will($stub);
    }

    /**
     * @return $this
     */
    public function after($id): self
    {
        $this->matcher->setAfterMatchBuilderId($id);

        return $this;
    }

    /**
<<<<<<< HEAD
     * @param mixed[] $arguments
     *
     * @throws MethodNameNotConfiguredException
     * @throws MethodParametersAlreadyConfiguredException
     * @throws \PHPUnit\Framework\Exception
=======
     * @throws RuntimeException
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
     *
     * @return $this
     */
    public function with(...$arguments): self
    {
<<<<<<< HEAD
        $this->ensureParametersCanBeConfigured();
=======
        $this->canDefineParameters();
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

        $this->matcher->setParametersRule(new Rule\Parameters($arguments));

        return $this;
    }

    /**
     * @param array ...$arguments
     *
<<<<<<< HEAD
     * @throws MethodNameNotConfiguredException
     * @throws MethodParametersAlreadyConfiguredException
     * @throws \PHPUnit\Framework\Exception
=======
     * @throws RuntimeException
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
     *
     * @return $this
     */
    public function withConsecutive(...$arguments): self
    {
<<<<<<< HEAD
        $this->ensureParametersCanBeConfigured();
=======
        $this->canDefineParameters();
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

        $this->matcher->setParametersRule(new Rule\ConsecutiveParameters($arguments));

        return $this;
    }

    /**
<<<<<<< HEAD
     * @throws MethodNameNotConfiguredException
     * @throws MethodParametersAlreadyConfiguredException
=======
     * @throws RuntimeException
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
     *
     * @return $this
     */
    public function withAnyParameters(): self
    {
<<<<<<< HEAD
        $this->ensureParametersCanBeConfigured();
=======
        $this->canDefineParameters();
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

        $this->matcher->setParametersRule(new Rule\AnyParameters);

        return $this;
    }

    /**
     * @param Constraint|string $constraint
     *
<<<<<<< HEAD
     * @throws MethodNameAlreadyConfiguredException
     * @throws MethodCannotBeConfiguredException
     * @throws \PHPUnit\Framework\InvalidArgumentException
=======
     * @throws RuntimeException
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
     *
     * @return $this
     */
    public function method($constraint): self
    {
        if ($this->matcher->hasMethodNameRule()) {
<<<<<<< HEAD
            throw new MethodNameAlreadyConfiguredException;
=======
            throw new RuntimeException(
                'Rule for method name is already defined, cannot redefine'
            );
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
        }

        $configurableMethodNames = array_map(
            static function (ConfigurableMethod $configurable) {
                return strtolower($configurable->getName());
            },
            $this->configurableMethods
        );

        if (is_string($constraint) && !in_array(strtolower($constraint), $configurableMethodNames, true)) {
<<<<<<< HEAD
            throw new MethodCannotBeConfiguredException($constraint);
=======
            throw new RuntimeException(
                sprintf(
                    'Trying to configure method "%s" which cannot be configured because it does not exist, has not been specified, is final, or is static',
                    $constraint
                )
            );
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
        }

        $this->matcher->setMethodNameRule(new Rule\MethodName($constraint));

        return $this;
    }

    /**
<<<<<<< HEAD
     * @throws MethodNameNotConfiguredException
     * @throws MethodParametersAlreadyConfiguredException
     */
    private function ensureParametersCanBeConfigured(): void
    {
        if (!$this->matcher->hasMethodNameRule()) {
            throw new MethodNameNotConfiguredException;
        }

        if ($this->matcher->hasParametersRule()) {
            throw new MethodParametersAlreadyConfiguredException;
=======
     * Validate that a parameters rule can be defined, throw exceptions otherwise.
     *
     * @throws RuntimeException
     */
    private function canDefineParameters(): void
    {
        if (!$this->matcher->hasMethodNameRule()) {
            throw new RuntimeException(
                'Rule for method name is not defined, cannot define rule for parameters ' .
                'without one'
            );
        }

        if ($this->matcher->hasParametersRule()) {
            throw new RuntimeException(
                'Rule for parameters is already defined, cannot redefine'
            );
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
        }
    }

    private function getConfiguredMethod(): ?ConfigurableMethod
    {
        $configuredMethod = null;

        foreach ($this->configurableMethods as $configurableMethod) {
            if ($this->matcher->getMethodNameRule()->matchesName($configurableMethod->getName())) {
                if ($configuredMethod !== null) {
                    return null;
                }

                $configuredMethod = $configurableMethod;
            }
        }

        return $configuredMethod;
    }

<<<<<<< HEAD
    /**
     * @throws IncompatibleReturnValueException
     */
=======
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    private function ensureTypeOfReturnValues(array $values): void
    {
        $configuredMethod = $this->getConfiguredMethod();

        if ($configuredMethod === null) {
            return;
        }

        foreach ($values as $value) {
            if (!$configuredMethod->mayReturn($value)) {
                throw new IncompatibleReturnValueException(
<<<<<<< HEAD
                    $configuredMethod,
                    $value
=======
                    sprintf(
                        'Method %s may not return value of type %s, its return declaration is "%s"',
                        $configuredMethod->getName(),
                        is_object($value) ? get_class($value) : gettype($value),
                        $configuredMethod->getReturnTypeDeclaration()
                    )
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
                );
            }
        }
    }
}
