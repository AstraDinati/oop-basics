<?php
require_once 'Arr.php';
$arr1 = new Arr();

$arr1->add([1,2,3,4,5,6]);
echo $arr1->getAvg();