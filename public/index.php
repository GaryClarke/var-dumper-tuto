<?php

require_once __DIR__.'/../vendor/autoload.php';

include 'server-dumper.php';

$foo = 'bar';

class MyClass
{
    public $randomProperty = 100;

    public function doSomething()
    {
        echo "Doing something...\n";
    }
}

$obj = new MyClass();
dump($obj)->doSomething();

$var = [
    'a simple string' => "in an array of 5 elements",
    'a float' => 1.0,
    'an integer' => 1,
    'a boolean' => true,
    'an empty array' => [],
];
dump($var);

$var = new \ErrorException(
    "For some objects, properties have special values\n"
    ."that are best represented as constants, like\n"
    ."`severity` below. Hovering displays the value (`2`).\n",
    0,
    E_WARNING
);
dump($var);
