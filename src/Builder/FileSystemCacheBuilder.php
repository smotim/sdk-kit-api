<?php

namespace service\KitAPI\Builder;

use service\KitAPI\Enum\CacheDirectories;
use service\KitAPI\Exception\Client\BuilderException;
use service\KitAPI\Interfaces\BuilderInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class FileSystemCacheBuilder implements BuilderInterface
{

    /** @var string */
    private $cacheDir;

    /**
     * @param string $cacheDir
     * @return FileSystemCacheBuilder
     */
    public function setCacheDir(string $cacheDir): FileSystemCacheBuilder
    {
        $this->cacheDir = $cacheDir;
        return $this;
    }

    /**
     * @return FilesystemAdapter
     * @throws BuilderException
     */
    public function build()
    {
        if (empty($this->cacheDir)) {
            return new FilesystemAdapter(CacheDirectories::DIR_NAME);
        }

        $cacheDir = static::getCacheDirPath($this->cacheDir);

        $this->createDir($cacheDir);

        return new FilesystemAdapter('', 0, $cacheDir);
    }

    /**
     * @param string $dir
     * @return void
     * @throws BuilderException
     */
    private function createDir(string $dir): void
    {
        if (is_dir($dir)) {
            return;
        }

        if (mkdir($dir, 0777, true) === false && is_dir($dir) === false) {
            throw new BuilderException(sprintf('Could not create directory "%s".', $dir));
        }
    }

    /**
     * @param string $cacheDir
     * @return string
     */
    private static function getCacheDirPath(string $cacheDir): string
    {
        if ($cacheDir !== '' && $cacheDir[strlen($cacheDir)-1] !== DIRECTORY_SEPARATOR) {
            $cacheDir .= DIRECTORY_SEPARATOR;
        }

        return $cacheDir . CacheDirectories::MAIN_DIR . DIRECTORY_SEPARATOR;
    }
}