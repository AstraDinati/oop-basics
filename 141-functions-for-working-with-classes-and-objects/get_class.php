<?php
class Test
{
    public $name;
}

$test = new Test;
// echo get_class($test); //Test

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

$test1 = new Test1('Adam');
$test2 = new Test1('Eva');

$test3 = new Test2('Vova');
$test4 = new Test2('Dima');

$arr = [$test3, $test1, $test2, $test4];

foreach($arr as $elem){
    echo $elem->name . ' class ' . get_class($elem) . '<br>';
}