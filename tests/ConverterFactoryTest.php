<?php

namespace Wunderkraut\Tests;

use Wunderkraut\Converter\Leet;
use Wunderkraut\Converter\Text2speech;
use Wunderkraut\Converter\Yeller;
use Wunderkraut\ConverterFactory;

class LeetTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @expectedException \Error
     */
    public function testX()
    {
        $factory = new ConverterFactory();
    }

    /**
     * @expectedException \RuntimeException
     * @expectedExceptionMessage Sorry, cannot find the type of conversion
     */
    public function testDoesUnknownConverterThrowException()
    {
        ConverterFactory::create("foobar");
    }

    public function testDoConvertersGetReturned()
    {
        $this->assertInstanceOf(Yeller::class, ConverterFactory::create("yeller"));
        $this->assertInstanceOf(Yeller::class, ConverterFactory::create("YELLER"));

        $this->assertInstanceOf(Leet::class, ConverterFactory::create("leet"));
        $this->assertInstanceOf(Leet::class, ConverterFactory::create("LeEt"));

        $this->assertInstanceOf(Text2Speech::class, ConverterFactory::create("Text2Speech"));
    }

}
