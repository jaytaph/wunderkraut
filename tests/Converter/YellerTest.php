<?php

namespace Wunderkraut\Tests\Converter;

use Wunderkraut\Converter\Yeller;

class YellerTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $this->yeller = new Yeller();
    }


    public function converterProvider()
    {
        return array(
            array('HELLO!!!', 'hello'),
            array('JIPPIE!!!', 'jippie'),
            array('FOO!!!', 'foo'),
            array('!!!', ''),
            array('AAAAAAAAAAAAAAA!!!', 'aaaaaaaaaaaaaaa'),
        );
    }

    /**
     * @dataProvider converterProvider
     */
    public function testDoesBasicConvertingWork($result, $text)
    {
        $this->assertEquals($result, $this->yeller->convert($text));
    }

    public function testWillThereBeExclamationMarksWhenTextIsEmpty()
    {
        $this->assertEquals('!!!', $this->yeller->convert(''));
    }


}
