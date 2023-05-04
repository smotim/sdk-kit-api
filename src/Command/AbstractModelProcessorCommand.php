<?php

namespace service\KitAPI\Command;

use service\KitAPI\Component\Serializer\Exception\RuntimeException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractModelProcessorCommand extends Command
{

    /**
     * @param OutputInterface $output
     * @return bool
     */
    protected static function isVerbose(OutputInterface $output): bool
    {
        return $output->getVerbosity() >= OutputInterface::VERBOSITY_VERBOSE;
    }

    /**
     * @param string $dir
     * @return void
     */
    protected static function createDir(string $dir): void
    {
        if (is_dir($dir)) {
            return;
        }

        if (mkdir($dir, 777, true) === false && is_dir($dir) === false) {
            throw new RuntimeException(sprintf('Could not create directory "%s".', $dir));
        }
    }
}