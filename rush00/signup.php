<?php
	require "header.php";
?>

<main>
	<h1>Signup</h1>
	<?php
	if (isset($_GET['error'])){
		if ($_GET['error'] == "emptyfields"){
			echo '<p>Fill in all fields!</p>';
		}else if ($_GET['error'] == "invalidmailuid"){
			echo '<p>Invalid username and e-mail!</p>';
		}else if ($_GET['error'] == "invalidmail"){
			echo '<p>Invalid e-mail!</p>';
		}else if ($_GET['error'] == "invalidUid"){
			echo '<p>Invalid username!</p>';
		}else if ($_GET['error'] == "passwordcheck"){
			echo '<p>Passwords did not match!</p>';
		}else if ($_GET['error'] == "sqlerror"){
			echo '<p>SQL error, please contact admin!</p>';
		}else if ($_GET['error'] == "usertaken"){
			echo '<p>Username taken!</p>';
		}else if ($_GET['signup'] == "success"){
			echo '<p>Signup successful!</p>';
		}
	}
	?>
	<form action="includes/signup.inc.php" method="post">
		<input type="text" name="uid" placeholder="Username">
		<input type="text" name="mail" placeholder="E-mail">
		<input type="password" name="pwd" placeholder="Password">
		<input type="Password" name="pwd-repeat" placeholder="Confirm password">
		<button type="submit" name="signup-submit">Signup</button>
	</form>
</main>

<?php
	require "footer.php";
?>
