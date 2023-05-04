<?php

namespace service\KitAPI\Tests\Component;

use PHPUnit\Framework\TestCase;
use service\KitAPI\Component\PhpFilesIterator;

class PhpFilesIteratorTest extends TestCase
{

    public function testIterate(): void
    {
        $iterator = new PhpFilesIterator(__DIR__);

        foreach ($iterator as $item) {
            self::assertArrayHasKey('file', $item);
            self::assertArrayHasKey('namespace', $item);
            self::assertArrayHasKey('fqn', $item);
            self::assertTrue(class_exists($item['fqn']));
        }
    }
}