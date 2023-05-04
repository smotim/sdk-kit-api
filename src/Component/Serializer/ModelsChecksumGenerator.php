<?php

namespace service\KitAPI\Component\Serializer;

use service\KitAPI\Component\FilesIteratorChecksumGenerator;
use service\KitAPI\Component\PhpFilesIterator;
use service\KitAPI\Component\Serializer\Exception\RuntimeException;
use service\KitAPI\Component\Utils;

class ModelsChecksumGenerator
{

    /**
     * @param array $checsums
     * @return void
     */
    public static function saveChecksums(array $checsums = []): void
    {
        try {
            $data = json_encode($checsums, JSON_THROW_ON_ERROR);
        } catch (\JsonException $exception) {
            $data = '{}';
        }

        if (file_put_contents(static::getChecksumFileName(), $data) === false) {
            throw new RuntimeException('Cannot save checksums for models.');
        }
    }

    /**
     * @return bool
     */
    public static function verifyChecksum(): bool
    {
        $checksumFile = static::getChecksumFileName();

        if (!file_exists($checksumFile)) {
            return false;
        }

        $oldHashes = static::getStoredChecksums();
        $newHashes = static::generateChecksums();

        foreach ($newHashes as $fileName => $hash) {
            if (!array_key_exists($fileName, $oldHashes)) {
                return false;
            }

            if ($oldHashes[$fileName] !== $hash) {
                return false;
            }
        }
        return true;
    }


    /**
     * @return array<string, string>
     */
    public static function getStoredChecksums(): array
    {
        if (!is_file(static::getChecksumFileName())) {
            return [];
        }

        try {
            return json_decode((string)file_get_contents(static::getChecksumFileName()), true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $exception) {
            return [];
        }
    }

    /**
     * @return array<string, string>
     */
    public static function generateChecksums(): array
    {
        return (new FilesIteratorChecksumGenerator(new PhpFilesIterator(Utils::getModelsDirectory())))
            ->setFileNameAccessor(static function (array $item) {
                return $item['file'];
            })->setKeyTransformer(static function (array $item) {
                return $item['fqn'];
            })->generateHashes();
    }


    /**
     * @return string
     */
    private static function getChecksumFileName(): string
    {
        return implode(DIRECTORY_SEPARATOR, [Utils::getModelCacheDirectory(), 'checksum.json']);
    }

}