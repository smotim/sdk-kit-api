<?php

namespace service\KitAPI\Command;

use service\KitAPI\Component\ComposerLocator;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CompilerPromptCommand extends AbstractModelProcessorCommand
{

    private const PACKAGE_NAME = 'kit/sdk-kit-api';

    private const COMPILER_PLUGIN = 'civicrm/composer-compile-plugin';

    protected function configure()
    {
        $this->setName('compiler:prompt')
            ->setDescription('Enable or disable code generation during client installation & update.')
            ->setHelp('Use this command to enable or disable automatic code generation.')
            ->addOption(
                'revert',
                'r',
                InputOption::VALUE_OPTIONAL,
                'You will need to run ./vendor/bin/kik-client models:generate -a after each update.',
                false
            );
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $composerJson = ComposerLocator::findComposerJson();

        if ($composerJson === '') {
            $output->writeln('<fg=black;bg=red> ❌ Cannot find composer.json</>');
            return -1;
        }

        try {
            $json = json_decode((string)file_get_contents($composerJson), true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $exception) {
            $output->writeln(sprintf('<fg=black;bg=red> ❌ Invalid JSON: %s</>', $exception->getMessage()));
            return -1;
        }

        $revert = $input->getOption('revert') !== false;

        if ($revert) {
            static::deactivateAutoCompiler($json);
        } else {
            static::activateAutoCompiler($json);
            static::activatePlugin($json);
        }

        try {
            $result = json_encode($json, JSON_THROW_ON_ERROR | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        } catch (\JsonException $exception) {
            $output->writeln(sprintf('<fg=black;bg=red> ❌ Cannot encode JSON: %s</>', $exception->getMessage()));
            return -1;
        }

        if (file_get_contents($composerJson, $result) === false) {
            $output->writeln('<fg=black;bg=red> ❌ Cannot write to file.</>');
            return -1;
        }

        $output->writeln(sprintf(
            '<fg=black;bg=green> ✓ Done, code generation has been %s.</>',
            $revert ? 'disabled' : 'enabled'
        ));

        return 0;
    }


    /**
     * @param array $composerJson
     * @return void
     */
    private static function activatePlugin(array &$composerJson): void
    {
        if (!array_key_exists('config', $composerJson)) {
            $composerJson['config'] = [
                'allow-plugins' => [
                    static::COMPILER_PLUGIN => true
                ]
            ];
            return;
        }

        if (!array_key_exists('allow-plugins', $composerJson['config'])) {
            $composerJson['config']['allow-plugins'] = [
                static::COMPILER_PLUGIN => true
            ];
            return;
        }
        $composerJson['config']['allow-plugins'][static::COMPILER_PLUGIN] = true;
    }

    /**
     * @param array $composerJson
     * @return void
     */
    private static function activateAutoCompiler(array &$composerJson): void
    {
        if (!array_key_exists('extra', $composerJson)) {
            $composerJson['extra'] = [
                'compile-mode' => 'whitelist',
                'compile-whitelist' => [self::PACKAGE_NAME]
            ];

            return;
        }

        if (array_key_exists('compile-mode', $composerJson['extra'])) {
            if (
                $composerJson['extra']['compile-mode'] === 'prompt' ||
                $composerJson['extra']['compile-mode'] === 'none'
            ) {
                $composerJson['extra']['compile-mode'] = 'whitelist';
            }

            if ('all' === $composerJson['extra']['compile-mode']) {
                return;
            }
        }
        $composerJson['extra']['compile-mode'] = 'whitelist';

        if (!array_key_exists('compile-whitelist', $composerJson['extra'])) {
            $composerJson['extra']['compile-whitelist'] = [self::PACKAGE_NAME];

            return;
        }

        if (!in_array(self::PACKAGE_NAME, $composerJson['extra']['compile-whitelist'])) {
            $composerJson['extra']['compile-whitelist'][] = self::PACKAGE_NAME;
        }
    }


    /**
     * @param array $composerJson
     * @return void
     */
    private static function deactivateAutoCompiler(array &$composerJson): void
    {
        if (!array_key_exists('extra', $composerJson)) {
            return;
        }

        if (
            array_key_exists('compile-whitelist', $composerJson['extra'])
            && $composerJson['extra']['compile-whitelist'] !== null
        ) {
            $composerJson['extra']['compile-whitelist'] = array_filter(
                $composerJson['extra']['compile-whitelist'],
                static function (string $item) {
                    return $item !== self::PACKAGE_NAME;
                }
            );
        }
    }

}