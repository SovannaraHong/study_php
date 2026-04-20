<h1>array</h1>

<?php
$student = array("dara", "sok", "chak", "seng");
echo $student[0];

$students = ["dara" => 20, "sok" => 21, "chak" => 22, "seng" => 23];

echo $students["dara"];


?>
<h1>multidimensional array</h1>

<?php
$products = [
    ["iphone", 1200, "inStock"],
    ["samsung", 1000, "outOfStock"],
    ["oppo", 800, "inStock"],
    ["nokia", 500, "outOfStock"],
    ["vivo", 700, "inStock"],
    ["realme", 600, "inStock"],
    ["oneplus", 900, "inStock"],
    ["xiaomi", 1100, "inStock"],
    ["huawei", 1300, "inStock"],
    ["oppo", 800, "inStock"],
];

foreach ($products as $product) {
    echo $product[0] . " - " . $product[1] . " - " . $product[2] . "<br>";
}


$fruits = ["apple", "banana", "cherry", "date", "elderberry", "fig", "grape", "honeydew", "kiwi", "lemon", "mango", "nectarine", "orange", "pear", "pineapple", "plum", "raspberry", "strawberry", "tangerine", "watermelon"];

for ($i = 0; $i < count($fruits); $i++) {
    echo "the fruit is = " . $fruits[$i] . "<br>";
};

$people = [
    ["id" => 1, "name" => "John", "age" => 20, "gender" => "male"],
    ["id" => 2, "name" => "Jane", "age" => 21, "gender" => "female"],
    ["id" => 3, "name" => "Jim", "age" => 22, "gender" => "male"],
    ["id" => 4, "name" => "Jill", "age" => 23, "gender" => "female"],
    ["id" => 5, "name" => "Jack", "age" => 24, "gender" => "male"],
    ["id" => 6, "name" => "Jill", "age" => 25, "gender" => "female"],
    ["id" => 7, "name" => "Jim", "age" => 26, "gender" => "male"],
    ["id" => 8, "name" => "Jill", "age" => 27, "gender" => "female"],
    ["id" => 9, "name" => "Jack", "age" => 28, "gender" => "male"],
];
foreach ($people as $person) {

    echo "the person is = " . $person['name'] . "<br>";
}


?>
<h1>function array </h1>
<?php

$fruits = ["apple", "banana"];

if (in_array("apple", $fruits)) {
    echo "the fruit is found" . "<br>";
} else {
    echo "the fruit is not found";
}
echo "--------------------------------" . "<br>";

array_push($fruits, "coca"); //add last
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "--------------------------------" . "<br>";

array_pop($fruits); //remove last
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "--------------------------------" . "<br>";

array_shift($fruits); //remove first
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "--------------------------------" . "<br>";

array_unshift($fruits, "apple"); //add first
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "--------------------------------" . "<br>";
array_splice($fruits, 1, 1); //remove index 1 and 1 item
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "--------------------------------" . "<br>";
$student1 = ["dara", "sok", "chak", "seng"];
$student2 = ["sok", "chak", "seng", "dara"];
$allStudent = array_merge($student1, $student2);

echo "<pre>";
print_r($allStudent);
echo "</pre>";
foreach ($allStudent as $student) {
    echo $student . "<br>";
}
echo "--------------------------------" . "<br>";

$price = ["apple" => 100, "banana" => 200];

$studentName = array_keys($price);
foreach ($studentName as $name) {
    echo $name . "<br>";
}
echo "--------------------------------" . "<br>";


echo "--------------------------------" . "<br>";


?>