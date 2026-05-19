<?php
class Employee
{
    public string $name;
    protected int $salary;
    private string $password;

    public function __construct(string $n, int $s, string $p)
    {
        $this->name = $n;
        $this->salary = $s;
        $this->password = $p;
    }
    private function validatePassword(): bool
    {
        return true;
    }
}
class Manager extends Employee
{
    public function getInfo()
    {
        echo "name" . $this->name . "<br>";
        echo "salary" . $this->salary . "<br>";
        // echo "password" . $this->password . "<br>";
    }
}
$manager = new Manager("akira", 1000, "123456");
$manager->getInfo();
$emp = new Employee("akira", 1000, "123456");
echo $emp->name;
