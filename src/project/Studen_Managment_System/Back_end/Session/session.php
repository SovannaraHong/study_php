<?php
session_start();
$_SESSION['id'] = '123';
$_SESSION['name'] = 'John Doe';
?>
<h1>this is session page1</h1>
<a href="session.php">session1</a>
<a href="session1.php">session2</a>
<a href="session2.php">session3</a>