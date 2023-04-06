<?php
class Employee
{
    public function
    __construct($name, $surname , $salary)
    {
        $this->name = $name;
        $this->surname  = $surname ;
        $this->salary = $salary;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary . '$';
    }
    
    private $name;
    private $surname;
    private $salary;
}

$user = new Employee('john','wood', 1000);
echo $user->getName();
echo '<br>';
echo $user->getSurname();
echo '<br>';
echo $user->getSalary();
echo '<br>';
echo $user->setSalary(2000);
echo $user->getSalary();