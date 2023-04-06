<?php
class Test
{
    public $prop1 = 1;
}
var_dump(property_exists('Test', 'prop1'));
echo '<br>';
var_dump(property_exists('Test', 'prop2'));
echo '<br>';

$arr = ['prop1', 'prop2', 'prop3', 'prop4'];
foreach ($arr as $prop) {
    if (property_exists('Test', $prop)) {
        $test = new Test;
        echo $test->$prop;
    }
}
