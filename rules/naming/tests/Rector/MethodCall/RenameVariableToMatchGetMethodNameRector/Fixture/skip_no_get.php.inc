<?php

namespace Rector\Naming\Tests\Rector\MethodCall\RenameVariableToMatchGetMethodNameRector\Fixture;

class SkipNoGetClass {
    public function run()
    {
        $a = $this->fastRunner();
    }
}

?>
