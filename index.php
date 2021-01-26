<?php

include "student.php";
include "studentTable.php";

function printResult($studentTableObj)
{
    $table = $studentTableObj->getStudentTable();
    $gradeSum = 0;
    foreach ($table as $key => $val) {
        $gradeSum = $gradeSum + $val->getGrade();
    }
    $gradeAvg = $gradeSum / $studentTableObj->getStudentCount();
    print("Note min : " . $table[0]->getGrade() . " par " . $table[0]->getName() . "\n");
    print("Note max : " . $table[count($table) - 1]->getGrade() . " par " . $table[count($table) - 1]->getName() . "\n");
    print("Moyenne : " . $gradeAvg . "\n");

}

$student1 = new student("Test1", 19);
$student2 = new student("Test2", 19.5);
$student3 = new student("Test3", 10);
$student4 = new student("Test4", 18);
$studentTable1 = new studentTable();

$studentTable1->addStudent($student1);
$studentTable1->addStudent($student2);
$studentTable1->addStudent($student3);
$studentTable1->addStudent($student4);

print_r($studentTable1->getStudentTable());

printResult($studentTable1);

$studentTable1->rmStudentByID(2);

print_r($studentTable1->getStudentTable());

printResult($studentTable1);

try {
    print_r($studentTable1->getStudentByID(-1));
} catch (Exception $e) {
    print("Erreur : " . $e->getMessage() . "\n");
}