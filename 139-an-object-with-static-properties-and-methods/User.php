<?php
class User
{
    public $user;
    private static $count = 0;
    public static function getCount()
    {
        return self::$count;
    }
    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }
}

$user1 = new User('Joe');
$user2 = new User('John');

echo User::getCount();