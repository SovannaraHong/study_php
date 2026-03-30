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
----------------------------------
<h1>time-----------</h1>
<?php
echo time()

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

<h1>-----------Regular Expressions-----------</h1>
<h3>regex . (dot)</h3>
<h3>regex [a-zA-E $]</h3>
<h3>regex () must be input(com)</h3>
<h3>regex | pipe</h3>
<h3>regex + at least one [0-9]+</h3>
<h3>regex ? at least one or option</h3>
<h3>regex * option if have don't care </h3>
<h3>regex {} how many [a-e]{5} </h3>
<h3>need use for convert sign \ skip </h3>
<h1>^ caret start condition ^[0-9]{4} 5343 </h1>
<h1>^ [^0-9a-zA-Z] </h1>
<h1>^ \d start from 0-9</h1>
<h1>^ \D no need number </h1>
<h1>^ \w [0-9a-zA-Z_] </h1>
<h1>^ \W no need [0-9a-zA-Z_] </h1>



<h1>exercise</h1>
<h3>^[0-9]{3}-[0-9]{4}-[0-9]{5}$</h3>
<form action="" method="post">
    <!-- <input type="text" pattern="^[0-9]{3}-[0-9]{4}-[0-9]{5}$" name="txtValue" id="" placeholder="input here"> -->
    <input type="text" name="txtValue" id="" placeholder="input here">
    <input type="submit" value="send" name="submit">
</form>


<h1>/^[0-9]{1,3}(,[0-9]{3}){0,}\.[0-9]{2}$/</h1>
<h1>Format email</h1>
<h3>/^[a-zA-Z-9_\.\-]+@[a-zA-Z0-9_\.\-]+\.[a-zA-Z0-9\.]{2,10}$/</h3> format shot
<h3>/^[\w\.\-]+@[\w\.\-]+\.[a-z-0-9\.]{2,10}$/i/</h3> format shot

<?php
if (isset($_POST['submit'])) {
    $message = $_POST['txtValue'];
    $pattern = '/^[0-9]{3}-[0-9]{4}-[0-9]{5}$/';
    $pattern1 = '/^(http:\/\/|https:\/\/|ftp:\/\/|ftps:\/\/)/';
    $pattern2 = '/^(http(s)?|ftp|ftps):\/\//';
    $pattern3 = '/^[a-zA-Z-9_\.\-]+@[a-zA-Z0-9_\.\-]\.[a-zA-Z0-9\.]{2,10}$/';
    if (preg_match($pattern3, $message)) {
        echo 'it correct match validate';
        echo $message;
    } else {
        echo 'it Incorrect match validate' . '<br>';
        echo $message;
    }
}

?>

<h1>URL VALIDATION</h1>


^(http(s)?|ftp(s)?):\/\/w{3}\.[\w\.\-]+\..{2,}$


<h2>format password</h2>
<h3>lowercase uppercase any symbols at least 8 character</h3>

<h1>(?=.*[a--z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^a-zA-Z0-9]).{8,30}</h1>

<?php

$patterns = '/php/i';
$text = 'I love PHP and php programming';
preg_match_all($patterns, $text, $matches);
print_r($matches[0]);
$date = "12-05-2026";
$pattern = "/-/";
$replacement = "/";
echo preg_replace($pattern, $replacement, $date);
$number = 'is number is 9845 and 99.33';
$r = '00';
$p = '/[0-9]+(\.[0-9]+)?/';
echo preg_replace($p, $r, $number);

?>