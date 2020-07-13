<?php

namespace Rector\Naming\Tests\Rector\MethodCall\RenameVariableToMatchGetMethodNameRector\Fixture;

class StaticCallClass {
    public function run()
    {
        $a = static::getFastRunner();
    }
}

?>
-----
<?php

namespace Rector\Naming\Tests\Rector\MethodCall\RenameVariableToMatchGetMethodNameRector\Fixture;

class StaticCallClass {
    public function run()
    {
        $fastRunner = static::getFastRunner();
    }
}

?>
