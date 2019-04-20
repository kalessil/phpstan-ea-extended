<?php declare(strict_types = 1);

namespace PHPStan\Rules\Playground;

use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

final class TheRuleToRuleThemAllTest extends RuleTestCase
{
    protected function getRule(): Rule
    {
        return new TheRuleToRuleThemAll();
    }

    public function testIfFindsPatterns(): void
    {
        $this->analyse([__DIR__ . '/data/Clazz.php'], [
            ['Found class "Package\Layer\Clazz" in "/var/www/tests/Rules/Playground/data/Clazz.php".', 5]
        ]);
    }
}