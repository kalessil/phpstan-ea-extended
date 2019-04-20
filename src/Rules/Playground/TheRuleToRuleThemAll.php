<?php declare(strict_types = 1);

namespace PHPStan\Rules\Playground;

use PhpParser\Node;
use PhpParser\Node\Stmt\Class_;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\Rule;

class TheRuleToRuleThemAll implements Rule
{
    /** @inheritdoc */
    public function getNodeType(): string
    {
        return Class_::class;
    }

    /**
     * @inheritdoc
     * @param Class_ $node
     */
    public function processNode(Node $node, Scope $scope): array
    {
        return [
            sprintf('Found class "%s" in "%s".', $node->namespacedName, $scope->getFile())
        ];
    }
}