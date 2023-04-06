<?php
require_once 'User.php';
require_once 'Student.php';

$student = new Student;

$student->setAge(18);
echo $student->getAge();
echo '<br>';
$student->setName('john');
echo $student->getName();