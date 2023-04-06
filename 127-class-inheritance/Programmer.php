<?php
require_once 'Employee.php';
class Programmer extends Employee
{
    private $langs = [];
    public function setLangs($lang)
    {
        array_push($this->langs, $lang);
    }
    public function getLangs()
    {
        return $this->langs;
    }
}