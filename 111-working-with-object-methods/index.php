<?php
// class User
// {
//     public $name;
//     public $age;
//     public function show(){
//         return '!!!';
//     }
// }

// $user = new User;
// $user->name = 'john';
// $user->age = 26;

// echo $user->show();

class User
{
    public $name;
    public $age;
    public function show($str){
        return $str . '!!!';
    }
}

$user = new User;
$user->name = 'john';
$user->age = 26;

echo $user->show('hello');
