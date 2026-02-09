<?php

/**
 * check int or float or double
 */
$a = 123;
echo is_int($a) ? "true" : "false";
unset($a);
// echo is_int($a) ? "true": "false";

//match 

$status = 200;
$message = match ($status) {
    200 => "ok",
    400 => "bad request",
    500 => "internal server error",
    default => "unknown status code"
};
echo $message;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="get" action="php.php">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="submit" name="save" value="Submit">
    </form>
</body>

</html>

<?php
if (isset($_GET['save'])) {
    $name = $_GET['name'] ?? 'Guest';
    echo "Hello, " . $name . "!";
}