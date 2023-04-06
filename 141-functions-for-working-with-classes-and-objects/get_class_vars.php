<?php
// function format($array)
// {
//     return implode('|', array_keys($array)) . "\r\n";
// }
class Test
{
    public $prop1;
    public $prop2;
    private $prop3;
    private $prop4;
    static $prop5 = 5;
    public static function expose()
    {
        var_dump(get_class_vars(__CLASS__));
    }
}

Test::expose();
