<?php

namespace Rofiadhim\ComposerHello;
class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "Guest"): string
    {
        return "Hello, $name! My name is {$this->name}.";
    }   
}