<?php

namespace service\KitAPI\Tests\Exception;

use PHPUnit\Framework\TestCase;
use service\KitAPI\Exception\Client\HandlerException;

class ClientExceptionTest extends TestCase
{

    public function testStringable(): void
    {
        $exception = ((string) new HandlerException('Test ClientException'));

        self::assertStringContainsString('Test ClientException', $exception);
        self::assertStringContainsString(__CLASS__, $exception);
    }
}