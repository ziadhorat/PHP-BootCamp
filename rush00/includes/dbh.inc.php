<?php

$db_server = "localhost";
$db_username = "root";
$db_password = "milo1999";
$db_name = "db_shop";
$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
if (!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
