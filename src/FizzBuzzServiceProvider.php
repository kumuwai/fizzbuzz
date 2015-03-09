<?php namespace Kumuwai\FizzBuzz;

use Illuminate\Support\ServiceProvider;

class FizzBuzzServiceProvider extends ServiceProvider 
{

	protected $defer = true;    // only load if/when needed

	public function register()
	{
		$this->app['fizz-buzz'] = $this->app->share(function($app){
			return new FizzBuzz();
		});
	}

	public function provides()
	{
		return array('FizzBuzz');
	}

}

