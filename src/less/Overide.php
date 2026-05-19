<?php

class Student
{
    public function speak(): string
    {
        return "i love reading book";
    }
}

class People extends Student
{
    #[Override]
    public function speak(): string
    {
        // return parent::speak();
        return "i love watch movie";
    }
}
$peo = new People();
echo $peo->speak();


class User
{
    protected string $username;
    public function __construct(string $username)
    {
        $this->username = $username;
    }
}

class Admin extends User
{
    private string $permissionLevel;

    public function __construct(string $username, string $level)
    {
        parent::__construct($username);
        $this->permissionLevel = $level;
    }
}
$a = new Admin("coca", "admin");
