<?php
class User
{
    private $surname;
    private $name;
    private $birthday;
    private $age;

    public function __construct($name, $surname, $birthday)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->birthday = $birthday;
        $this->age = $this->calculateAge($birthday);
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getBirthday()
    {
        return $this->birthday;
    }
    private function calculateAge($birthday)
    {
        return floor((time() - strtotime($birthday))/(60*60*24*365));
    }
}
