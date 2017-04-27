<?php

namespace Wunderkraut\Converter;

use Symfony\Component\Process\ProcessBuilder;

class Text2speech implements \Wunderkraut\Converter\ConvertInterface
{
    public function convert(string $text): string
    {
        $builder = new ProcessBuilder();
        $process = $builder
            ->add('say')
            ->add($text)
            ->getProcess()
        ;

        $process->run();

        return "speech";
    }

}
