<?php
require_once 'User.php';
require_once 'Student.php';

$student = new Student('John', 'Doel', '1996-11-13', 3);

echo $student->getName();
echo '<br>';
echo $student->getSurname();
echo '<br>';
echo $student->getCourse();
echo '<br>';
echo $student->getAge();
