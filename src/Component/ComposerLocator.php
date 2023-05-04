<?php

namespace service\KitAPI\Component;

class ComposerLocator
{

    /**
     * @return string
     */
    public static function findAutoloader(): string
    {
        $counter = 0;
        $dir = static::getBaseDirectory();

        for(;;) {
            if (file_exists($dir . '/autoload.php')) {
                return $dir . '/autoload.php';
            }

            if (file_exists($dir . '/vendor/autoload.php')) {
                return $dir . '/vendor/autoload.php';
            }

            $counter++;

            if ($counter > 5) {
                break;
            }
        }
        return '';
    }

    /**
     * @return string
     */
    public static function findComposerJson(): string
    {
        $counter = 0;
        $dir = static::getBaseDirectory();

        for (;;) {
            $fileName = implode(DIRECTORY_SEPARATOR, [$dir, 'composer.json']);

            if (file_exists($fileName) && static::getPackageComposerJson() !== $fileName) {
                return $fileName;
            }

            $counter++;
            $dir = dirname($dir);

            if (2 < $counter) {
                break;
            }
        }

        return '';
    }


    /**
     * @return string
     */
    private static function getBaseDirectory(): string
    {
        $cwd = getcwd();

        return $cwd === false ? (string) realpath(implode(DIRECTORY_SEPARATOR, [__DIR__, '..', '..'])) : $cwd;
    }

    /**
     * @return string
     */
    private static function getPackageComposerJson(): string
    {
        return (string) realpath(implode(DIRECTORY_SEPARATOR, [__DIR__, '..', '..', 'composer.json']));
    }
}