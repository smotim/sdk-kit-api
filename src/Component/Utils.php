<?php

namespace service\KitAPI\Component;

use Psr\Http\Message\StreamInterface;

class Utils
{

    /**
     * @param string $text
     * @return string
     */
    public static function removeTrailingSlash(string $text): string
    {
        return (string) preg_replace('/\/$/', '', $text);
    }

    /**
     * @param StreamInterface $stream
     * @return string
     */
    public static function getBodyContents(StreamInterface $stream): string
    {
        return $stream->isSeekable() ? $stream->__toString() : $stream->getContents();
    }

    /**
     * @return string
     */
    public static function getModelCacheDirectory(): string
    {
        $parentDir = implode(DIRECTORY_SEPARATOR, [__DIR__, '..', '..']);

        return implode(DIRECTORY_SEPARATOR, [realpath($parentDir), 'models']);
    }

    /**
     * @return string
     */
    public static function getModelsDirectory(): string
    {
        return (string) realpath(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), '..', 'src', 'Model']));
    }
}