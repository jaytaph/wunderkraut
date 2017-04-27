<?php

namespace Wunderkraut\Command;

use Wunderkraut\ConverterFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ConvertCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('convert')
            ->setDefinition(array(
                new InputArgument('text', InputArgument::REQUIRED, 'The text we want to convert'),

                new InputOption('converter', 'c', InputOption::VALUE_REQUIRED, 'Which converter to use'),
            ))
            ->setDescription('This will convert any text')
        ;
    }

    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        if (! $input->getOption('converter')) {
            $input->setOption('converter', 'leet');
        }
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $converter = ConverterFactory::create($input->getOption('converter'));
        $output_text = $converter->convert($input->getArgument('text'));

        $output->writeln("Converted to: <comment>".$output_text."</comment>");
    }

}
