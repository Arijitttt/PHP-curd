<?php

define('DB_HOST','localhost');

define('DB_NAME','e-cart');

define('DB_USER','root');

define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) Or die(mysql_error());

?>