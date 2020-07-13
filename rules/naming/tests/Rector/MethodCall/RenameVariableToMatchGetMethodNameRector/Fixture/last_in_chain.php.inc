<?php

namespace Rector\Naming\Tests\Rector\MethodCall\RenameVariableToMatchGetMethodNameRector\Fixture;

class LastInChainClass {
    public function run()
    {
        $a = $this->getRunners()->getFast();
    }
}

?>
-----
<?php

namespace Rector\Naming\Tests\Rector\MethodCall\RenameVariableToMatchGetMethodNameRector\Fixture;

class LastInChainClass {
    public function run()
    {
        $fast = $this->getRunners()->getFast();
    }
}

?>
