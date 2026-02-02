<?php

declare (strict_types=1);
namespace OptinCraft\DI;

use OptinCraft\Psr\Container\ContainerExceptionInterface;
/**
 * Exception for the Container.
 */
class DependencyException extends \Exception implements ContainerExceptionInterface
{
}
