<?php

namespace School;

class School
{

    protected array $persons = [];
    protected array $classes = [];

    public function addPerson(Person $person): void
    {
        $this->persons[] = $person;
    }

    public function addClass(SchoolClass $class) : void
    {
        $this->classes[] = $class;
    }

    public function personsInSchoolCount() : int
    {
        return count($this->persons);
    }
}