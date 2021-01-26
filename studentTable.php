<?php


class studentTable
{
    private $table = array();
    private $studentCount;

    public function __construct()
    {
        $this->studentCount = 0;
    }

    public function getStudentCount()
    {
        return $this->studentCount;
    }

    public function addStudent($newStudent)
    {
        if (count($this->table) != 0) {
            $indexCounter = 0;
            while ($indexCounter < count($this->table)
                && $newStudent->getGrade() > $this->table[$indexCounter]->getGrade()) {
                $indexCounter++;
            }
            array_splice($this->table, $indexCounter, 0, array($newStudent));

        } else {
            $this->table[0] = $newStudent;
        }
        $this->studentCount++;
    }

    public function getStudentByID($studentIndex)
    {
        if ($studentIndex > count($this->table) - 1 || $studentIndex < 0) {
            throw new Exception("Hors du tableau");
        } else {
            return $this->table[$studentIndex];
        }
    }

    public function rmStudentByID($studentIndex)
    {
        for ($i = $studentIndex; $i < $this->studentCount-1; $i++) {
            $this->table[$i] = $this->table[$i+1];
        }
        unset($this->table[$this->studentCount-1]);
        $this->studentCount--;
    }

    public function getStudentTable()
    {
        return $this->table;
    }
}