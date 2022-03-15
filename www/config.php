<?php

define('MYSQL_HOST', "db");
define('MYSQL_DATABASE', "myDb");
define('MYSQL_USER', "user");
define('MYSQL_PASSWORD',"123456");

$mysqli = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);

?>
