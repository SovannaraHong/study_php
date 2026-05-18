<?php
class Person
{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function sayHello(): string
    {
        return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}
$person = new Person("akira", 20);
$person->name = "akira";
echo $person->name;
echo $person->sayHello();
