<?php
class Employee
{
    public function
    __construct($name, $age , $salary)
    {
        $this->name = $name;
        $this->age  = $age ;
        $this->salary = $salary;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }
    public function addAge($years)
    {
        $newAge = $this->age + $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }
    public function subAge($years)
    {
        $newAge = $this->age - $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary . '$';
    }
    private function isAgeCorrect($age)
    {
        if ($age >= 1 and $age <= 100) {
            return true;
        } else {
            return false;
        }
    }
    private $name;
    private $age;
    private $salary;
}
$user = new Employee('john', 50, 1000);

echo $user->getName();
echo '<br>';
echo $user->getAge();
echo '<br>';
echo $user->getSalary();
