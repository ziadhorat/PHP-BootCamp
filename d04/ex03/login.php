<?php
	include 'auth.php';
	session_start();
	if (auth($_GET['login'], $_GET['passwd']) == TRUE){
		echo "OK\n";
		$_SESSION['loggued_on_user'] = $_GET['login'];
	}else{
		echo "ERROR\n";
		$_SESSION['loggued_on_user'] = "";
	}
// curl -b cook.txt 'localhost:8080/Piscine-PHP/d04/ex03/whoami.php'
// curl -c cook.txt 'localhost:8080/Piscine-PHP/d04/ex03/login.php?login=BigTits&passwd=smol'
// curl -b cook.txt 'localhost:8080/Piscine-PHP/d04/ex03/logout.php'
// curl -b cook.txt 'localhost:8080/Piscine-PHP/d04/ex03/whoami.php'
?>
