<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Removes empty service-locators registered for ServiceValueResolver.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RemoveEmptyControllerArgumentLocatorsPass implements CompilerPassInterface
{
    private $controllerLocator;

    public function __construct(string $controllerLocator = 'argument_resolver.controller_locator')
    {
        $this->controllerLocator = $controllerLocator;
    }

    public function process(ContainerBuilder $container)
    {
        $controllerLocator = $container->findDefinition($this->controllerLocator);
        $controllers = $controllerLocator->getArgument(0);

        foreach ($controllers as $controller => $argumentRef) {
            $argumentLocator = $container->getDefinition((string) $argumentRef->getValues()[0]);

            if (!$argumentLocator->getArgument(0)) {
                // remove empty argument locators
                $reason = sprintf('Removing service-argument resolver for controller "%s": no corresponding services exist for the referenced types.', $controller);
            } else {
                // any methods listed for call-at-instantiation cannot be actions
                $reason = false;
<<<<<<< HEAD
                [$id, $action] = explode('::', $controller);
=======
                list($id, $action) = explode('::', $controller);
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

                if ($container->hasAlias($id)) {
                    continue;
                }

                $controllerDef = $container->getDefinition($id);
<<<<<<< HEAD
                foreach ($controllerDef->getMethodCalls() as [$method]) {
=======
                foreach ($controllerDef->getMethodCalls() as list($method)) {
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
                    if (0 === strcasecmp($action, $method)) {
                        $reason = sprintf('Removing method "%s" of service "%s" from controller candidates: the method is called at instantiation, thus cannot be an action.', $action, $id);
                        break;
                    }
                }
                if (!$reason) {
                    // see Symfony\Component\HttpKernel\Controller\ContainerControllerResolver
                    $controllers[$id.':'.$action] = $argumentRef;

                    if ('__invoke' === $action) {
                        $controllers[$id] = $argumentRef;
                    }
                    continue;
                }
            }

            unset($controllers[$controller]);
            $container->log($this, $reason);
        }

        $controllerLocator->replaceArgument(0, $controllers);
    }
}
