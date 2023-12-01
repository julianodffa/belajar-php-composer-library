<?php

namespace JulianoDaffaAdytia\Belajar;

class Greetings
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(string $name = "You're Guest"): string
    {
        return "Hello $name, My name is $this->name.";
    }
}
