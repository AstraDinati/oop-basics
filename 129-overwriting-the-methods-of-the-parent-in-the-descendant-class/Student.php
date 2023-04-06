<?php
require_once 'User.php';
class Student extends User
{
    private $course;

    public function setAge($age)
    {
        if($age <= 25){
            parent::setAge($age);
            $this->age = $age;
        }
    }
    public function setName($name)
    {
        if(strlen($name) <= 10){
            parent::setName($name);
            $this->name = $name;
        }
    }
    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }
}
