<?php

namespace service\KitAPI\Command;

use service\KitAPI\Component\Serializer\ModelsChecksumGenerator;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class VerifyModelsCommand extends AbstractModelProcessorCommand
{

    /**
     * Sets description and help for a command.
     */
    protected function configure(): void
    {
        $this->setName('models:verify')
            ->setDescription('Verify models cache. This command will fail if model cache is not up-to-date.')
            ->setHelp('Use this command if you want to check existing model cache.');
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int
     * @throws \JsonException
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        if (ModelsChecksumGenerator::verifyChecksum()) {
            $io->success("Models are up to date.");
            return 0;
        }

        $io->error("Outdated models! Run \"models:generate\" command to fix that.");
        return -1;
    }

}