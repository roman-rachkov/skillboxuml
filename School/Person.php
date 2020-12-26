<?php

namespace School;

abstract class Person
{
    public string $name;
    protected int $age;

    public function __construct(string $name, int $age)
    {
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getName(): string
    {
        return $this->name;
    }
}