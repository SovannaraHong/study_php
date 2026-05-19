<?php
class Person
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
class Employees extends Person
{
    public function hello(): string
    {
        return "Hello, my name is " . $this->name;
    }
}
$employee = new Employees("John");
$employee->name = "John";
echo $employee->hello() . "<br>";


//multiple inheritance
class Animal
{
    public function eat(): string
    {
        return "I can eat";
    }
}
class Dog extends Animal
{
    public function bark(): string
    {
        return "I can bark";
    }
}
class Cat extends Dog
{
    public function meow(): string
    {
        return "I can meow";
    }
}
$dog = new Dog();
echo $dog->eat() . "<br>";
echo $dog->bark() . "<br>";
$cat = new Cat();
echo $cat->eat() . "<br>";
echo $cat->meow() . "<br>";
echo $cat->bark() . "<br>";
//Hierarchical inheritance

//if you want to use multiple inheritance you can use traits
trait Fruit
{
    public function eatFruit(): string
    {
        return "I can eat fruit";
    }
}
trait Vegetable
{
    public function eat(): string
    {
        return "I can eat vegetable";
    }
}
class Apple
{
    use Vegetable, Fruit;
}
$apple = new Apple();
echo $apple->eat() . "<br>";
echo $apple->eatFruit() . "<br>";


//Hybrid inheritance