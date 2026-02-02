<?php

declare (strict_types=1);
namespace OptinCraft\DI\Definition\Source;

use OptinCraft\DI\Definition\Definition;
/**
 * Describes a definition source to which we can add new definitions.
 *
 * @author Matthieu Napoli <matthieu@mnapoli.fr>
 */
interface MutableDefinitionSource extends DefinitionSource
{
    public function addDefinition(Definition $definition): void;
}
