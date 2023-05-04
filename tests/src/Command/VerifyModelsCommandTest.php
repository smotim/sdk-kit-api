<?php

namespace service\KitAPI\Tests\Command;

use PHPUnit\Framework\TestCase;
use service\KitAPI\Command\VerifyModelsCommand;
use Symfony\Component\Console\Tester\CommandTester;

class VerifyModelsCommandTest extends TestCase
{
    public function testVerifyModelsCommand(): void
    {
        $tester = new CommandTester(new VerifyModelsCommand());
        $tester->execute([]);

        self::assertStringContainsString('Models are up to date.', $tester->getDisplay());
    }

}