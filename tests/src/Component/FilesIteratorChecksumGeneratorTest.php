<?php

namespace service\KitAPI\Tests\Component;

use PHPUnit\Framework\TestCase;
use service\KitAPI\Component\FilesIteratorChecksumGenerator;
use service\KitAPI\Component\PhpFilesIterator;

class FilesIteratorChecksumGeneratorTest extends TestCase
{

    public function testGenerateHash(): void
    {
        $iterator = new PhpFilesIterator(__DIR__);
        $hashes   = (new FilesIteratorChecksumGenerator($iterator))
            ->setFileNameAccessor(static function (array $item) {
                return $item['file'];
            })->setKeyTransformer(static function (array $item) {
                return $item['fqn'];
            })->generateHashes();

        $iterator->rewind();

        foreach ($iterator as $item) {
            self::assertArrayHasKey($item['fqn'], $hashes);
        }
    }
}