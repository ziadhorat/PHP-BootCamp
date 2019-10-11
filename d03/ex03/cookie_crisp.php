<?php
	$action = $_GET["action"];
	$name = $_GET["name"];
	$value = $_GET["value"];

	if ($action == "set") {
		setcookie($name, $value, time() + 86400, "/");
	}
	if ($action == "get") {
		echo $_COOKIE[$name];
		echo (strlen($_COOKIE[$name]) > 0 ? "\r\n" : "");
	}
	if ($action == "del") {
		setcookie($name, $value, time() - 86400, "/");
	}
?>
