<?php
class Test
{
    public function method1(){
        return true;
    }
    public function method2(){
        return true;
    }
    public function method3(){
        return true;
    }
}
// var_dump(get_class_methods('Test'));

$test = new Test;
$arr = get_class_methods($test);

foreach($arr as $method){
    echo "$method\n";
}