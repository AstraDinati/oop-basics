<?php
class Student
{
    private $name;
    private $course;
    public function __construct($name)
    {
        $this->name = $name;
        $this->course = 1;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getCourse()
    {
        return $this->course;
    }
    // public function transferToNextCourse()
    // {
    //     $this->course++;
    // }
    public function checkCourse($course)
    {
        if ($course < 5) {
            return true;
        } else {
            return false;
        }
    }
    public function transferToNextCourse()
    {
        $newCourse = ++$this->course;
        if($this->checkCourse($newCourse)) {
            $this->course = $newCourse;
        } else {
            $this->course = 5;
        }
    }
}
