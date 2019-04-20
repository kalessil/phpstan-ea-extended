<?php

namespace PHPStan\Rules\Playground;

use PhpParser\Node;
use PhpParser\Node\Stmt\Class_;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\Rule;
use PHPStan\Type\VerbosityLevel;
use PHPStan\Broker\Broker;

class TheRuleToRuleThemAll implements Rule
{
    /** @var Broker */
    private $broker;

    public function __construct(Broker $broker)
    {
        $this->broker = $broker;
    }

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