<?php

namespace service\KitAPI\Component;

class FilesIteratorChecksumGenerator
{

    /** @var \Iterator<mixed> */
    private $iterator;

    /** @var callable */
    private $fileNameAccessor;

    /** @var callable */
    public $keyTransformer;

    /** @var callable */
    public $hashFunc;

    public function __construct(\Iterator $iterator)
    {
        $this->iterator = $iterator;
    }

    /**
     * @return callable
     */
    public function getFileNameAccessor(): callable
    {
        return $this->fileNameAccessor ?? static function($fileName) {
            return (string) $fileName;
        };
    }

    /**
     * @param callable $fileNameAccessor
     * @return FilesIteratorChecksumGenerator
     */
    public function setFileNameAccessor(callable $fileNameAccessor): FilesIteratorChecksumGenerator
    {
        $this->fileNameAccessor = $fileNameAccessor;
        return $this;
    }

    /**
     * @return callable
     */
    public function getKeyTransformer(): callable
    {
        return $this->keyTransformer ?? static function ($fileName) {
            return (string) $fileName;
        };
    }

    /**
     * @param callable $keyTransformer
     * @return FilesIteratorChecksumGenerator
     */
    public function setKeyTransformer(callable $keyTransformer): FilesIteratorChecksumGenerator
    {
        $this->keyTransformer = $keyTransformer;
        return $this;
    }


    /**
     * @return callable
     */
    public function getHashFunc(): callable
    {
        return $this->hashFunc ?? static function ($fileName) {
            $contents = preg_replace('/\r|\n|\r\n/m', "\n", (string) file_get_contents($fileName));
            return md5($contents ?? '');
        };
    }

    /**
     * @param callable $hashFunc
     * @return FilesIteratorChecksumGenerator
     */
    public function setHashFunc(callable $hashFunc): FilesIteratorChecksumGenerator
    {
        $this->hashFunc = $hashFunc;
        return $this;
    }

    /**
     * @return array<string, string>
     */
    public function generateHashes(): array
    {
        $hashes = [];

        foreach ($this->iterator as $item) {
            $fileName = $this->getFileNameAccessor()($item);
            $hashes[(string) $this->getKeyTransformer()($item)] = $this->getHashFunc()($fileName);
        }

        return $hashes;
    }
}