<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RUSH00</title>
</head>
<body>
	<header>

	</header>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RUSH00</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<nav class="header">
			<ul>
				<li><a class="active" href="index.php">HOME</a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">CONTACT</a></li>
			</ul>
			<div>
			<?php
				if (isset($_SESSION['userId']))
					echo '	<form action="includes/logout.inc.php" method="post">
								<input type="submit" name="logout-submit" value="LOGOUT">
							</form>';
				else
					echo '<form action="includes/login.inc.php" method="post">
								<input type="text" name="mailuid" placeholder="Username/E-mail">
								<input type="password" name="pwd" placeholder="Password">
								<input type="submit" name="login-submit" value="LOGIN">
							</form>
							<a class="signup" href="signup.php">Signup</a>';
			?>
			</div>
		</nav>
	</header>
