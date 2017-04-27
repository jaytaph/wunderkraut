<?php

namespace Wunderkraut\Converter;

class Yeller implements \Wunderkraut\Converter\ConvertInterface
{
    public function convert(string $text): string
    {
        return strtoupper($text)."!!!";
    }

}
