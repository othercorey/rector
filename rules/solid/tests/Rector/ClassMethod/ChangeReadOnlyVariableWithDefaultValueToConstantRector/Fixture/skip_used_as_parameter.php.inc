<?php

namespace Rector\SOLID\Tests\Rector\ClassMethod\ChangeReadOnlyVariableWithDefaultValueToConstantRector\Fixture;

class SkipUsedAsParameters
{
    public function run($items)
    {
        foreach ($items as $key => $value) {
            if ($value === null) {
                $value = [];
            }

            $this->runSomething($value);
        }
    }

    private function runSomething(?array $value)
    {
    }
}
