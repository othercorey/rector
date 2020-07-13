<?php

declare(strict_types=1);

namespace Rector\Naming\Rector\MethodCall;

use Nette\Utils\Strings;
use PhpParser\Node;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\StaticCall;
use Rector\Core\Rector\AbstractRector;
use Rector\Core\RectorDefinition\CodeSample;
use Rector\Core\RectorDefinition\RectorDefinition;
use Rector\NodeTypeResolver\Node\AttributeKey;

/**
 * @see \Rector\Naming\Tests\Rector\MethodCall\RenameVariableToMatchGetMethodNameRector\RenameVariableToMatchGetMethodNameRectorTest
 */
final class RenameVariableToMatchGetMethodNameRector extends AbstractRector
{
    public function getDefinition(): RectorDefinition
    {
        return new RectorDefinition('Rename variable to match get method name', [
            new CodeSample(
                <<<'PHP'
class SomeClass {
    public function run()
    {
        $a = $this->getRunner();
    }
}
PHP
,
                <<<'PHP'
class SomeClass {
    public function run()
    {
        $runner = $this->getRunner();
    }
}
PHP

            ),
        ]);
    }

    /**
     * @return string[]
     */
    public function getNodeTypes(): array
    {
        return [MethodCall::class, StaticCall::class];
    }

    /**
     * @param MethodCall $node
     */
    public function refactor(Node $node): ?Node
    {
        $parentNode = $node->getAttribute(AttributeKey::PARENT_NODE);
        if (! $parentNode instanceof Assign) {
            return null;
        }

        $newName = $this->getNewVariableName($node);
        if ($newName === null) {
            return null;
        }

        /** @var Node\Expr\Variable $variableNode */
        $variableNode = $parentNode->var;
        $variableNode->name = $newName;

        return $node;
    }

    /**
     * @param MethodCall $node
     */
    private function getNewVariableName(Node $node): ?string
    {
        $name = $this->getName($node->name);
        if ($name === null) {
            return null;
        }

        // @see https://regex101.com/r/hnU5pm/1/
        $matches = Strings::match($name, '#get(([A-Z]).+)#');

        if ($matches === null) {
            return null;
        }

        return lcfirst($matches[1]);
    }
}
