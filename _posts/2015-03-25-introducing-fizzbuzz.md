---
layout: post
title: Introducing FizzBuzz
---

FizzBuzz
========
<p class="badge">
<a href="https://travis-ci.org/kumuwai/fizzbuzz"><img src="https://img.shields.io/travis/kumuwai/fizzbuzz/master.svg"></a> 
<a href="https://coveralls.io/r/kumuwai/fizzbuzz"><img src="https://coveralls.io/repos/kumuwai/fizzbuzz/badge.svg"></a> 
<a href="https://scrutinizer-ci.com/g/kumuwai/fizzbuzz"><img src="https://img.shields.io/scrutinizer/g/kumuwai/fizzbuzz.svg"></a> 
<a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-blue.svg"></a>'
</p>

This is a version of the classic fizzbuzz kata:

> "Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”."

For example, a typical round of fizz buzz would start as follows:

> 1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, Fizz Buzz, 16, 17, Fizz, 19, Buzz, Fizz, 22, 23, Fizz, Buzz, 26, Fizz, 28, 29, Fizz Buzz, 31, 32, Fizz, 34, Buzz, Fizz, ...

This is a very simple practice Laravel 5 package to learn techniques of creating and testing a package that will work with Laravel 5. It also includes connections to continuous-integration tools, and can work as a prototype for new packages. It's adapted from my [Laravel 4 version](jijoel/fizzbuzz). 


Installation
--------------
This is not available as a package on packagist, so if you'd like to install it via composer, you'll need to use a vcs repository. Add this to your composer.json file:

    "require": {
        "kumuwai/fizzbuzz": "dev-master"
    },
    "repositories": [
        {
            "type": "vcs",
            "url":  "https://github.com/kumuwai/fizzbuzz.git"
        }
    ],

You will also need to register the service provider in app/config/app.php:

    'Kumuwai\FizzBuzz\FizzBuzzServiceProvider',

The service provider does not automatically include an alias to the facade. If you would like to use the facade, add an alias to it:

    'FizzBuzz'  => 'Kumuwai\FizzBuzz\FizzBuzzFacade',


Usage
---------

The FizzBuzz class only exposes one method, `get`. You can call it as follows: 

```php
Route::get('/fizz', function()
{
    for($i=1; $i<=100; $i++) {
        echo '<li>'.FizzBuzz::get($i).'</li>';            
    }
});
```

