<?php

namespace Rector\Naming\Tests\Rector\MethodCall\RenameVariableToMatchGetMethodNameRector\Fixture;

class SomeClass {
    public function run()
    {
        $a = $this->getFastRunner();
    }
}

?>
-----
<?php

namespace Rector\Naming\Tests\Rector\MethodCall\RenameVariableToMatchGetMethodNameRector\Fixture;

class SomeClass {
    public function run()
    {
        $fastRunner = $this->getFastRunner();
    }
}

?>
