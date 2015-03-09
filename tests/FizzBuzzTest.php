<?php namespace Kumuwai\FizzBuzz;

use PHPUnit_Framework_TestCase;


class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    private $test;

    public function setUp()
    {
        $this->test = new FizzBuzz;
    }

    public function testSetup()
    {
        $this->assertInstanceOf('Kumuwai\FizzBuzz\FizzBuzz', $this->test);
    }

    /**
     * @dataProvider getValues
     */
    public function testValues($input, $expected)
    {
        $this->assertEquals($expected, $this->test->get($input));
    }

    public function getValues()
    {
        return array(
            [1, 1],
            [2, 2],
            [3, 'Fizz'],
            [4, 4],
            [5, 'Buzz'],
            [6, 'Fizz'],
            [9, 'Fizz'],
            [10, 'Buzz'],
        );
    }

    public function testCompareToGolden()
    {
        $golden = "1,2,Fizz,4,Buzz,Fizz,7,8,Fizz,Buzz," 
                . "11,Fizz,13,14,FizzBuzz,16,17,Fizz,19,Buzz,"
                . "Fizz,22,23,Fizz,Buzz,26,Fizz,28,29,FizzBuzz,";

        $test = '';
        for($i=1; $i<=30; $i++) {
            $test .= $this->test->get($i) . ',';
        }
        $this->assertEquals($golden, $test);
    }
}


