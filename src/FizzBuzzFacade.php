<?php namespace Kumuwai\FizzBuzz;

use Illuminate\Support\Facades\Facade;
 
class FizzBuzz extends Facade 
{
    protected static function getFacadeAccessor() { return 'fizz-buzz'; }
}
