<?php
setcookie("username", "akira", time() + 3600);
echo $_COOKIE['username'];
setcookie("username", "", time() - 3600);
echo $_COOKIE['username'];
