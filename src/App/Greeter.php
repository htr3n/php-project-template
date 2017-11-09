<?php

namespace App;

class Greeter
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function createGreeting()
    {
        return trim("Hello " . $this->name);
    }

    public function sayHello()
    {
        echo $this->createGreeting() . PHP_EOL;
    }
}
