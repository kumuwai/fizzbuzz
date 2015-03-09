<?php namespace Kumuwai\FizzBuzz;

class FizzBuzz
{
    protected $overrides = array(
        15 => 'FizzBuzz',
        5 => 'Buzz',
        3 => 'Fizz',
    );

    public function get($int)
    {
        foreach($this->overrides as $key => $val) {
            if ($int % $key == 0) {
                return $val;
            }
        }

        return $int;
    }

}