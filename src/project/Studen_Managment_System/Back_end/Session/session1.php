<?php
session_start();
echo $_SESSION['id'];
echo $_SESSION['name'];
?>
<h1>this is session page2</h1>
<a href="session.php">session1</a>
<a href="session1.php">session2</a>
<a href="session2.php">session3</a>