<?php
	require "header.php";
?>

<main>
	<?php
	if (isset($_SESSION['userId'])){
		echo '<h1>Change password</h1>
		<form action="includes/profile.inc.php" method="post">
			<input type="password" name="oldpwd" placeholder="Old password">
			<input type="password" name="pwd" placeholder="New password">
			<input type="Password" name="pwd-repeat" placeholder="Confirm password">
			<button class="buttonstyle" type="submit" name="pwdchange-submit">Change password</button>
		</form>';
	}
	else
		echo "<p>You are not logged in</p>";
	?>
</main>

<?php
	require "footer.php";
?>
