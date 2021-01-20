<?php

include "student.php";
include "studentTab.php";

$student1 = new student("Test1",19);
$student2 = new student("Test2", 19.5);
$student3 = new student("Test3", 10);
$studentTable = new studentTab();

$studentTable->addStudent($student1);
$studentTable->addStudent($student2);
$studentTable->addStudent($student3);

$studentTable->printStudentTab();

$student4 = new student("Test3", 20);

$studentTable->addStudent($student4);

$studentTable->printStudentTab();

$studentTable->rmStudentByID(2);

$studentTable->printStudentTab();

print_r($studentTable->getStudentByID(2));