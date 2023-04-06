<?php
require_once 'User.php';
require_once 'Student.php';

$student = new Student;

$student->setName('John');
$student->setAge(20);
$student->setCourse(3);

echo $student->getName();
echo '<br>';
echo $student->getAge();
echo '<br>';
echo $student->addOneYear();
echo $student->getAge();
