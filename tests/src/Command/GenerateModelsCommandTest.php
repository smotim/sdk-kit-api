<?php

namespace service\KitAPI\Tests\Command;

use PHPUnit\Framework\TestCase;
use service\KitAPI\Command\GenerateModelsCommand;
use Symfony\Component\Console\Tester\CommandTester;

class GenerateModelsCommandTest extends TestCase
{

    public function testGenerateModelsCommand(): void
    {
        $tester = new CommandTester(new GenerateModelsCommand());
        $tester->execute([]);

        self::assertStringContainsString('Done, generated code for', $tester->getDisplay());
    }
}