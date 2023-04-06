<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'Student.php';
require_once 'Programmer.php';

$Employee = new Employee;

$Employee->setName('John');
$Employee->setAge(25);
$Employee->setSalary(1000);

echo $Employee->getName();
echo '<br>';
echo $Employee->getAge();
echo '<br>';
echo $Employee->getSalary();
echo '<br>';
echo '<br>';

$Student = new Student;

$Student->setName('Kate');
$Student->setAge(20);
$Student->setCourse(3);

echo $Student->getName();
echo '<br>';
echo $Student->getAge();
echo '<br>';
echo $Student->getCourse();
echo '<br>';
echo '<br>';

$Programmer = new Programmer;

$Programmer->setName('Mark');
$Programmer->setAge(28);
$Programmer->setLangs('php');
$Programmer->setLangs('js');
$Programmer->setLangs('c++');

echo $Programmer->getName();
echo '<br>';
echo $Programmer->getAge();
echo '<pre>';
print_r($Programmer->getLangs());
echo '</pre>';