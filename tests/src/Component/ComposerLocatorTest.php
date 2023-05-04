<?php

namespace service\KitAPI\Tests\Component;

use PHPUnit\Framework\TestCase;
use service\KitAPI\Component\ComposerLocator;

class ComposerLocatorTest extends TestCase
{

    public function testFindAutoloader(): void
    {
        $file = ComposerLocator::findAutoloader();

        self::assertStringContainsString('autoload.php', $file);
        self::assertFileExists($file);
    }

    public function testFindComposerJson(): void
    {
        $file = ComposerLocator::findComposerJson();

        self::assertEmpty($file);
    }
}