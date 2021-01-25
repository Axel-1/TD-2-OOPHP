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
            foreach ($this->table as $key => $val) {
                if ($val->getGrade() > $newStudent->getGrade()) {
                    break;
                } else {
                    $indexCounter++;
                }
            }
            array_splice($this->table, $indexCounter, 0, array($newStudent));

        } else {
            $this->table[0] = $newStudent;
        }
        $this->studentCount++;
    }

    public function getStudentByID($studentID)
    {
        return $this->table[$studentID];
    }

    public function rmStudentByID($studentID)
    {
        unset($this->table[$studentID]);
        $this->table = array_values($this->table);
        $this->studentCount--;
    }

    public function getStudentTable()
    {
        return $this->table;
    }
}