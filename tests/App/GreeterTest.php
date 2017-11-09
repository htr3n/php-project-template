<?php

namespace App;

class GreeterTest extends \PHPUnit\Framework\TestCase
{
    public function testCreateGreetingWithNullInput()
    {
        $greeter = new \App\Greeter(null);
        $this->assertEquals('Hello', $greeter->createGreeting());
    }

    public function testCreateGreetingWithEmptyInput()
    {
        $greeter = new \App\Greeter('');
        $this->assertEquals('Hello', $greeter->createGreeting());
    }

    public function testCreateGreetingWithNameInput()
    {
        $greeter = new \App\Greeter('Joe');
        $this->assertEquals('Hello Joe', $greeter->createGreeting());
    }
}
