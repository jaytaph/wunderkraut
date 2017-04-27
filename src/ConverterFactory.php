<?php

namespace Wunderkraut;

class ConverterFactory {
    private function __construct() {}

    public static function create($type)
    {
        $type = strtolower($type);

        switch ($type) {
            case "leet" :
                return new \Wunderkraut\Converter\Leet();
            case "text2speech" :
                return new \Wunderkraut\Converter\Text2Speech();
            case "yeller" :
                return new \Wunderkraut\Converter\Yeller();
        }

        throw new \RuntimeException("Sorry, cannot find the type of conversion");
    }

}
