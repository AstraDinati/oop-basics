<?php
class Test1
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Test2
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

var_dump(class_exists('test1'));
echo '<br>';
var_dump(class_exists('TEST2'));
echo '<br>';
var_dump(class_exists('Test3'));
echo '<br>';
if(class_exists($_GET['test'])){
    echo 'exist';
}