<?php

namespace School;

class Pupil extends Person
{
    private bool $isAdult;

    public function __construct(string $name, int $age, bool $isAdult)
    {
        $this->isAdult = $isAdult;
        parent::__construct($name, $age);
    }

    public function isAdult(): bool
    {
        return $this->isAdult;
    }
}