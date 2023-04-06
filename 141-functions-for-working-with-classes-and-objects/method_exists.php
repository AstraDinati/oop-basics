<?php
class Test
{
    public function method1(){
        return true;
    }
    public function method2(){
        return true;
    }
}

// var_dump(method_exists('Test', 'method1'));
// var_dump(method_exists('Test', 'METHOD2'));

if(class_exists($_GET['class'])){
    if(method_exists('Test', $_GET['method'])){
        $test = new Test;
        var_dump($test->method1());
    }
}