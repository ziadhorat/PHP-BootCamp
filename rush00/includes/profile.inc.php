<?php
if (isset($_POST['pwdchange-submit'])){
	require 'dbh.inc.php';
	$oldpwd = $_POST['oldpwd'];
	$pwd = $_POST['pwd'];
	$pwdconfirm = $_POST['pwd-repeat'];
	if (empty($oldpwd) || empty($pwd) || empty($pwdconfirm)){
		header("Location: ../profile.php?error=emptyfield");
		exit();
	}else{
		$sql = "SELECT pwdUsers FROM users WHERE idUsers=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../index.php?error=sqlerror");
			exit();
		}else{
			mysqli_stmt_bind_param($stmt, "s", $_SESSION['userId']);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			header("Location: ../index.php?error=".$result);
			exit();
		}
	}
}else{
	header("Location: ../index.php?error=loggedout");
	exit();
}
?>