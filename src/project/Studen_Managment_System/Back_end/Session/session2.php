<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);
//destroy session delete all session
?>
<h1>this is session page3</h1>
<a href="session.php">session1</a>
<a href="session1.php">session2</a>
<a href="session2.php">session3</a>