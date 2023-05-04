<?php

namespace service\KitAPI\Tests\Component\Serializer;

use PHPUnit\Framework\TestCase;
use service\KitAPI\Component\Serializer\ModelsChecksumGenerator;

class ModelsChecksumGeneratorTest extends TestCase
{

    public function testChecksumsCorrect(): void
    {
        self::assertTrue(
            ModelsChecksumGenerator::verifyChecksum(),
            'The checksums for models are not valid. Perhaps, you forgot to update models? ' .
            'Use "bin/console models:generate" command to do that.'
        );
    }
}