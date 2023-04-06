<?php
class User
{
    public $surname; 
    public $name; 
    public $patronymic; 

    public function __construct($surname, $name, $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }
}

$props = ['surname', 'name', 'patronymic'];

$user = new User('Иванов', 'Иван', 'Иванович');
	
	$props = ['surname', 'name', 'patronymic'];
	echo $user->{$props[1]} .' '. $user->{$props[2]};