<?php


class student
{
    private string $name;
    private float $grade;

    public function __construct($newName, $newGrade)
    {
        $this->name = $newName;
        $this->grade = $newGrade;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGrade(): float
    {
        return $this->grade;
    }
}