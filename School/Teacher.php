<?php

namespace School;

class Teacher extends Person
{
    private $experience;

    public function __construct(string $name, int $age, $experience)
    {
        $this->experience = $experience;
        parent::__construct($name, $age);
    }

    public function getExperience()
    {
        return $this->experience;
    }

}