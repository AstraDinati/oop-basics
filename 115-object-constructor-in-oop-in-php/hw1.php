<?php
class Employee
{
    public $name;
    public $age;
    public $salary;

    public function
    __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$user1 = new Employee('eric', 25, 1000);

echo $user1->name;
echo '<br>';
echo $user1->age;
echo '<br>';
echo $user1->salary;
echo '<br>';

$user2 = new Employee('kyle', 30, 2000);

echo $user2->name;
echo '<br>';
echo $user2->age;
echo '<br>';
echo $user2->salary;
echo '<br>';

echo $user1->salary + $user2->salary;