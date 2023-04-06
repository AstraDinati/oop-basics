<?php
require_once 'User.php';
class Employee extends User
{
    private $salary;
    public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function increaseRevenue($value)
    {
        $this->salary = $this->salary + $value;
    }
    public function decreaseRevenue($value)
    {
        $this->salary = $this->salary - $value;
    }
}

$employee = new Employee;
$employee->setName('john'); 
$employee->setSalary(1000); 

echo $employee->getName();   
echo $employee->getSalary();