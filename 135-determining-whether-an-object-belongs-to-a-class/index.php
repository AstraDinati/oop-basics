<?php
require_once 'Employee.php';
require_once 'Student.php';
require_once 'User.php';
require_once 'Employee1.php';
require_once 'City.php';

$stu1 = new Student('John', 100);
$stu2 = new Student('Joe', 110);
$stu3 = new Student('Jeck', 120);

$emp1 = new Employee('Kate', 300);
$emp2 = new Employee('Jane', 350);
$emp3 = new Employee('May', 400);

$arr = [$emp1, $stu3, $stu1, $emp2, $stu2, $emp3];

foreach($arr as $elem){
    if ($elem instanceof Employee){
        echo '<pre>';
        print_r($elem);
        echo '</pre>';
    }
}

foreach($arr as $elem){
    if ($elem instanceof Student){
        echo '<pre>';
        print_r($elem);
        echo '</pre>';
    }
}

$sumStudentScholarship = 0;
$sumEmployeeSalary = 0;
foreach($arr as $elem){
    if($elem instanceof Student){
        $sumStudentScholarship += $elem->scholarship;
    } elseif ($elem instanceof Employee) {
        $sumEmployeeSalary += $elem->salary;
    }
}
echo $sumEmployeeSalary;
echo '<br>';
echo $sumStudentScholarship;
echo '<br>';

$us1 = new User('John', 'Cena');
$us2 = new User('Jeff', 'Hardy');
$us3 = new User('Randy', 'Orton');

$emp11 = new Employee1('Adam', 'Gods', 40);
$emp12 = new Employee1('Eva', 'Gods', 39);
$emp13 = new Employee1('Snake', 'Gods', 1);

$city1 = new City('London', 8900000);
$city2 = new City('Moscow', 15000000);
$city3 = new City('Tokyo', 14000000);

$arr = [$us1, $city2, $us2, $emp12, $city1, $us3, $emp13, $city3, $emp11];

// foreach($arr as $elem){
//     if (!$elem instanceof User){
//         echo $elem->name . '<br>';
//     }
// }

foreach($arr as $elem){
    if (!($elem instanceof Employee1) and !($elem instanceof City)){
        echo $elem->name . '<br>';
    }
}