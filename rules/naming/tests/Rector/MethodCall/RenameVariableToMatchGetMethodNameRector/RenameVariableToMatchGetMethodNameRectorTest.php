<?php

declare(strict_types=1);

namespace Rector\Naming\Tests\Rector\MethodCall\RenameVariableToMatchGetMethodNameRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\Naming\Rector\MethodCall\RenameVariableToMatchGetMethodNameRector;
use Symplify\SmartFileSystem\SmartFileInfo;

final class RenameVariableToMatchGetMethodNameRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return RenameVariableToMatchGetMethodNameRector::class;
    }
}
