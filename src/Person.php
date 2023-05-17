<?php

namespace Usman\Hello;

class Person
{
    function __construct(private string $name)
    {
    }

    function hello(string $name = "Guest"): string
    {
        return "Hello $name, my name is $this->name" . PHP_EOL;
    }
}
