<?php

namespace Wunderkraut\Converter;

class Leet implements \Wunderkraut\Converter\ConvertInterface
{
    public function convert(string $text): string
    {
        if (! empty($text)) {
            $text .= "  lolz";
        } else {
            $text = "niks te lezen...";
        }

        $text = str_replace("a", "4", $text);
        $text = str_replace("e", "3", $text);
        $text = str_replace("o", "0", $text);

        return $text;
    }

}
