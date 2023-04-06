<?php
class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$user = new User('john', 21);
$methods = ['method1' => 'getName', 'method2' => 'getAge'];
echo 'имя '. $user->{$methods['method1']}() .' возраст '. 
$user->{$methods['method2']}();