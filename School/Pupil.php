<?php

namespace School;

class Pupil extends Person
{
    private bool $isAdult;

    public function __construct($name, $age, $isAdult)
    {
        $this->name = $name;
        $this->age = $age;
        $this->isAdult = $isAdult;
    }

    public function isAdult(): bool
    {
        return $this->isAdult;
    }
}