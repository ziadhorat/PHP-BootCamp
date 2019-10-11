<?php
	function change($serializedArray, $item)
	{
		$array = unserialize($serializedArray);
		$found = 0;
		if ($array) {
			foreach ($array as $k => $v)
				if (($v['login'] === $_POST['login']) && ($v['passwd'] === hash("sha512", $_POST['oldpw']))){
					$array[$k]['passwd'] = hash("sha512", $_POST['newpw']);
					$found = 1;
				}
			if ($found === 0) {
				echo "ERROR\n";
				exit();
			}
		}
		return serialize($array);
	}
	if (!$_POST['login'] || !$_POST['oldpw'] || !$_POST['newpw'] || !$_POST['submit'] || !$_POST['submit'] === "OK"){
		echo "ERROR\n";
		exit();
	}
	if (file_exists("../private/passwd")){
		$file = file_get_contents('../private/passwd');
		$tmp_user['login'] = $_POST['login'];
		$tmp_user['passwd'] = hash("sha512", $_POST['passwd']);
		$data = change($file, $tmp_user);
		file_put_contents("../private/passwd", $data);
		echo "OK\n";
	}
?>
