<?php

namespace service\KitAPI\Component;

use SebastianBergmann\FileIterator\Iterator;

class PhpFilesIterator implements \Iterator
{

    private const NAMESPACE_MATCHER = '/namespace\s+((?:\\\\{1,2}\w+|\w+\\\\{1,2})(?:\w+\\\\{0,2})+)/m';

    /** @var Iterator<string|int, string|array> */
    private $parent;

    public function __construct(string $directory)
    {
        $this->parent = new \RegexIterator(
            new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($directory)),
            '/^.+\.php$/i',
            \RecursiveRegexIterator::GET_MATCH
        );
    }

    public function current(): array
    {
        $matches = [];
        $file = $this->parent->current();

        if (is_array($file) && count($file) > 0) {
            $file = $file[0];
        }

        if (empty($file)) {
            return [];
        }

        $result = ['file' => $file];

        preg_match(static::NAMESPACE_MATCHER, (string) file_get_contents($file), $matches);

        if (count($matches) >= 2) {
            $result['namespace'] = $matches[1];
            $result['fqn'] = sprintf('%s\\%s', $matches[1], str_ireplace('.php', '', basename($file)));
        }

        return $result;
    }

    public function next()
    {
        $this->parent->next();
    }


    public function key()
    {
        return $this->parent->key();
    }

    public function valid()
    {
        return $this->parent->valid();
    }

    public function rewind()
    {
        $this->parent->rewind();
    }
}