<?php
class Employee
{
    private $name;
    private $salary;

    public function __construct(
        $name,
        $salary
    ) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

class EmployeesCollection
{
    private $employees = [];
    // public function add($employee)
    // {
    //     if (!$this->exist($employee)) {
    //         $this->employees[] = $employee;
    //     }
    // }
    public function add($employee)
    {
        if (!in_array($employee, $this->employees, true)) {
            $this->employees[] = $employee;
        }
    }
    public function get()
    {
        return $this->employees;
    }
    // private function exist($newEmployee)
    // {
    //     foreach ($this->employees as $employee) {
    //         if ($newEmployee === $employee) {
    //             return true;
    //         } else {
    //             return false;
    //         }
    //     }
    // }
}

$employeesCollection = new EmployeesCollection;

$employeesCollection->add(new Employee('john', 100));
$employeesCollection->add(new Employee('john', 100));

echo '<pre>';
print_r($employeesCollection->get());
echo '</pre>';