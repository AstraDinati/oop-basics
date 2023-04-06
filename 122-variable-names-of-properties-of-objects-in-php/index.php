<?php
require_once 'City.php';
$london = new City('London', 47, 8900000);
$props = ['name', 'foundation', 'population'];
foreach ($props as $prop) {
    echo $london->$prop . '<br>';
}
