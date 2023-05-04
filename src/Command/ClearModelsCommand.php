<?php

namespace service\KitAPI\Command;

use service\KitAPI\Component\PhpFilesIterator;
use service\KitAPI\Component\Utils;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ClearModelsCommand extends AbstractModelProcessorCommand
{
    protected function configure()
    {
        $this->setName('models:clear')
            ->setDescription('Removes all generated models, leaves only empty directory behind.')
            ->setHelp('Use this command if you want to remove existing model cache.');
    }


    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $target = Utils::getModelCacheDirectory();

        if (!is_dir($target)) {
            $output->writeln('<error>The target directory does not exist.</error>');
            $output->writeln('<info>You can safely use "bin/console models:generate" to generate models.</info>');

            return -1;
        }

        $output->writeln(sprintf('Cleaning up <fg=magenta>"%s"</>...', $target));

        if (self::isVerbose($output)) {
            $output->writeln('');
        }

        $checksumFile = implode(DIRECTORY_SEPARATOR, [$target, 'checksum.json']);
        $models = new PhpFilesIterator($target);

        foreach ($models as $model) {
            if (file_exists($model['file'])) {
                unlink($model['file']);

                if (self::isVerbose($output)) {
                    $output->writeln(sprintf('- Removed <fg=magenta>"%s"</>', $model['file']));
                }
            }
        }

        if (file_exists($checksumFile)) {
            unlink($checksumFile);
        }

        if (self::isVerbose($output)) {
            $output->writeln('');
        }

        $output->writeln('<fg=black;bg=green> ✓ Done!</>');

        return 0;

    }


}