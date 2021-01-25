<?php


class student
{
    private $name;
    private $grade;

    public function __construct($newName, $newGrade)
    {
        $this->name = $newName;
        $this->grade = $newGrade;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGrade()
    {
        return $this->grade;
    }
}