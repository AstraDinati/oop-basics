<?php
class Test
{
    public $prop1;
    public $prop2;
    private $prop3;
    private $prop4;
    static $prop5 = 5;
    public function expose()
    {
        var_dump(get_object_vars($this));
    }
}
$test = new Test;

var_dump(get_object_vars($test));
echo '<br>';
$test->expose();