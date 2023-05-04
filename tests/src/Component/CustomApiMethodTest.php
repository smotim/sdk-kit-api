<?php

namespace service\KitAPI\Tests\Component;

use PHPUnit\Framework\TestCase;
use service\KitAPI\Component\CustomApiMethod;
use service\KitAPI\Enum\RequestMethod;
use service\KitAPI\Interfaces\RequestSenderInterface;

class CustomApiMethodTest extends TestCase
{

    public function testDefault(): void
    {
        $baseUrl = 'https://capi.tk-kit.com';
        $mock = $this->getMockBuilder(RequestSenderInterface::class)
            ->onlyMethods(['send', 'route', 'host'])
            ->getMock();

        $mock->method('send')
            ->with(RequestMethod::GET, $baseUrl . '/method')
            ->willReturn([$baseUrl]);

        $mock->method('route')
            ->withAnyParameters()
            ->willReturn($baseUrl . '/method');

        static::assertEquals([$baseUrl], (new CustomApiMethod(RequestMethod::GET, 'method'))($mock));
    }

    public function testRawRoute(): void
    {
        $baseUrl = 'https://capi.tk-kit.com';
        $mock = $this->getMockBuilder(RequestSenderInterface::class)
            ->onlyMethods(['send', 'route', 'host'])
            ->getMock();

        $mock->method('send')
            ->with(RequestMethod::GET, 'method')
            ->willReturn([$baseUrl]);

        $mock->method('route')
            ->withAnyParameters()
            ->willReturn('');

        static::assertEquals(
            [$baseUrl],
            (new CustomApiMethod(RequestMethod::GET, 'method'))->useRouteAsUri()($mock)
        );
    }
}