<?php
class User
{
    private $name;
    private $age;

    public function __construct(
        $name,
        $age
    ) {
        $this->name = $name;
        $this->age  = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$user1 = new User('john', 30);
$user2 = new User('john', 30);
$user3 = $user2;

function compare1($obj1, $obj2)
{
    return ($obj1 == $obj2);
}

function compare2($obj1, $obj2)
{
    return ($obj1 === $obj2);
}

function compare3($obj1, $obj2)
{
    if ($obj1 === $obj2)
    {
        return 1;
    } elseif ($obj1 == $obj2)
    {
        return 0;
    } else { return -1;}
}

var_dump(compare1($user1, $user2));
echo '<br>';
var_dump(compare2($user3, $user2));
echo '<br>';
echo compare3($user1, $user2);
echo '<br>';
echo compare3($user3, $user2);
echo '<br>';
echo compare3($user1, 978769567);