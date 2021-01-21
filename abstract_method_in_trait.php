<?php

trait TraitTest
{
    abstract public function getUserDataById(int $userId): User;
}

class User
{

}

class TraitTestClass
{
    use TraitTest;

    public function getUserDataById(int $userId): User
    {
        // SOME LOGIC TO GET USER FROM DB...

        return new User();
    }
}

$traitTest = new TraitTestClass();
$user = $traitTest->getUserDataById(1234);

var_dump($user);
