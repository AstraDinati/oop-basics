<?php
// class User
// {
//     public $name;
//     public $age;

//     public function show()
//     {
//         return $this->name;
//     }
// }

// $user = new User;
// $user->name = 'john';

// $user->age = 25;

// echo $user->show();

// class Employee
// {
//     public $name;
//     public $age;
//     public $salary;

//     public function getName()
//     {
//         return $this->name;
//     }
//     public function getAge()
//     {
//         return $this->age;
//     }
//     public function getSalary()
//     {
//         return $this->salary;
//     }
//     public function checkAge()
//     {
//         if(($this->age) >= 18){
//             return true;
//         } else {
//             return false;
//         }
//     }
// }

// $user1 = new Employee;
// $user1->name = 'john';
// $user1->salary = 500;

// $user1->age = 25;

// var_dump($user1->checkAge());

// $user2 = new Employee;
// $user2->name = 'john2';
// $user2->salary = 100;

// $user2->age = 15;

// echo '<br>';
// var_dump($user2->checkAge());
// echo '<br>';
// echo $user1->getSalary() + $user2->getSalary();

// class User
// 	{
// 		public $name;
// 		public $age;
		
// 		// Метод для изменения имени юзера:
// 		public function setAge($age)
// 		{
//             if(($this->age) >= 18){
//                 $this->age = $age; 
//             }
// 		}
// 	}
	
// 	$user = new User;
// 	$user->name = 'john'; 
// 	$user->age = 25; 

// 	$user->setAge(30);

// 	echo $user->age; 

class Rectangle
{
    public $width;
    public $height;
    public function getSquare($width, $height){
        return ($this->width * $this->height)/2;
    }
    public function getPerimetr($width, $height){
        return sqrt(($this->height**2 + ($this->width/2)**2))*2 + $this->width;
    }
}
$name = new Rectangle;
$name->height = 5;
$name->width = 10;

echo $name->getPerimetr(10,5);