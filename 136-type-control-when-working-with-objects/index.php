<?php
require_once 'Post.php';
require_once 'Employee.php';

$programmer = new Post('programmer', 1000);
$manager = new Post('manager', 800);
$driver = new Post('driver', 999);

$emp1 = new Employee('Mark', 'Zuckerberg', $programmer);

echo '<pre>';
print_r($emp1);
echo '</pre>';

$emp1->changePost($manager);

echo '<pre>';
print_r($emp1);
echo '</pre>';