<?php 
require_once 'City.php';

$cities = [
    new City('Tokio', 14000000), 
    new City('Moskow', 12000000),
    new City('NewYork', 8460000),
    new City('Hong Kong', 7413000), 
    new City('London', 9000000)
];

foreach($cities as $city){
    echo $city->name . ' население ' . $city->population . '<br>';
}