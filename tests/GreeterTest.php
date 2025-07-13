<?php

use App\Greeter;
use PHPUnit\Framework\TestCase;

class GreeterTest extends TestCase
{
    public function testGreetReturnsHelloWorldByDefault()
    {
        $greeter = new Greeter();
        $this->assertEquals('Hello, World!', $greeter->greet());
    }

    public function testGreetReturnsHelloName()
    {
        $greeter = new Greeter();
        $this->assertEquals('Hello, Gemini!', $greeter->greet('Gemini'));
    }
}