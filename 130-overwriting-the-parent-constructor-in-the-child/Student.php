<?php
require_once 'User.php';
class Student extends User
{
    private $course;

    public function __construct($name, $surname, $birthday, $course)
    {
        parent::__construct($name, $surname, $birthday);
        $this->course = $course;
    }
    public function getCourse()
    {
        return $this->course;
    }
}
