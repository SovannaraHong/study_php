<form action="other-testing.php" method="post">
    <input type="submit" name="btnSave" id="">
</form>

<?php
if (isset($_POST['btnSave'])) {
}


$name = '     Welcome to setec     ';
$nameOriginal = 'Welcome to setec';
echo $name . '<br>';
echo $nameOriginal . '<br>';

echo str_word_count($name);

echo strpos($name, 'to') . '<br>';
echo strrpos($name, 'to') . '<br>';
echo strtoupper($name) . '<br>';
echo strtolower($name) . '<br>';
echo ucfirst($name) . '<br>';
echo ucwords($name) . '<br>';
echo str_replace('to', 'of', $name) . '<br>';
echo trim($name) . '<br>';
echo ltrim($name) . '<br>';
echo rtrim($name) . '<br>';

?>
<h1>Format</h1>
<?php
$n = 3526346.4346346;
echo number_format($n, 2, ',', ' ') . '<br>';
printf('your value is %.3f', $n);

?>


<h1>cut string</h1>
<?php
$message = 'welcome to cambodia';
//  1 para cut from 2 para get value
echo substr($message, 0, 3) . '<br>';
echo substr($message, 11) . '<br>';
echo substr_replace($message, 'japan', 11) . '<br>';
echo htmlspecialchars($message) . '<br>';
echo str_repeat('hello <br>', 4);
?>

----------------------------------
<h1>date-----------</h1>

<?php
echo date_default_timezone_get();
date_default_timezone_set('asia/phnom_penh');
echo "<hr>";
echo date('Y-m-d H:i:s');
$dob = '2999-03-23';
echo date('Y-m-d', strtotime($dob)) . '<br>';
?>


<h3>htmlspecialchars</h3>
<h5>form</h5>
<form action="" method="post">
    <textarea name="message" id="message"></textarea>
    <input type="submit" value="submit" name="save">
</form>
<?php
if (isset($_POST['save'])) {
    $message = $_POST['message'];
    echo htmlentities($message) . '<br>';
    echo '------------------------' . '<br>';
    echo htmlspecialchars($message) . '<br>';
    echo strip_tags($message, "<h1>") . '<br>';
}
?>