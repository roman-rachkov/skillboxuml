<?php

namespace School;

class Teacher extends Person
{
    private $experience;

    public function __construct($name, $age, $experience)
    {
        $this->name = $name;
        $this->age = $age;
        $this->experience = $experience;
    }

    public function getExperience()
    {
        return $this->experience;
    }

}