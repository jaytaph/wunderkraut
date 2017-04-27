<?php

namespace Wunderkraut\Tests\Converter;

use Wunderkraut\Converter\Leet;

class LeetTest extends \PHPUnit_Framework_TestCase
{

    public function testDoesBasicConvertingWork()
    {
        $leet_convert = new Leet();
        $this->assertEquals('h3ll0  l0lz', $leet_convert->convert('hello'));
        $this->assertEquals('004433  l0lz', $leet_convert->convert('ooaaee'));
    }

    public function testDoesConverterNotAddLolzWhenWeAddAnEmptyText() {
        $leet_convert = new Leet();
        $this->assertEquals('niks t3 l3z3n...', $leet_convert->convert(''));
    }
}
