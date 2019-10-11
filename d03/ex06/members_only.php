<?php
	header('Content-Type: text/html; charset=utf-8');
	$img = file_get_contents('../img/42.png');
	$imgdata = base64_encode($img);
	if ($_SERVER["PHP_AUTH_USER"] == "zaz" && $_SERVER["PHP_AUTH_PW"] == "Ilovemylittleponey") {
		echo "<html><body>\nHello Zaz<br />\n<img src=\"data:image/png;base64,".$imgdata."\">\n</body></html>\n";
	} else {
		header('HTTP/1.0 401 Unauthorized');
		header('WWW-Authenticate: Basic realm=\'\'Member area\'\'');
		echo "<html><body>That area is accessible for members only</body></html>\n";
	}
?>
