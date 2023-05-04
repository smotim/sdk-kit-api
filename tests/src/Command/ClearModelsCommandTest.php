<?php

namespace service\KitAPI\Tests\Command;

use PHPUnit\Framework\TestCase;
use service\KitAPI\Command\ClearModelsCommand;
use Symfony\Component\Console\Tester\CommandTester;

class ClearModelsCommandTest extends TestCase
{

    public function testClearModelsCommand(): void
    {
        $tester = new CommandTester(new ClearModelsCommand());
        $tester->execute([]);

        self::assertStringContainsString('Cleaning up', $tester->getDisplay());
        self::assertStringContainsString('Done!', $tester->getDisplay());
    }
}