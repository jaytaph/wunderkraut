<?php
declare(strict_types=1);

namespace Wunderkraut\Converter;

interface ConvertInterface {

    public function convert(string $text): string;

}
