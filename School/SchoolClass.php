<?php

namespace School;

class SchoolClass
{
    private Teacher $teacher;

    protected array $pupils = [];

    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }

    public function addPupil(Pupil $pupil): void
    {
        $this->pupils[] = $pupil;
    }

}