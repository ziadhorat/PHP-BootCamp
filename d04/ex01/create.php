<?php
	function add($serializedArray, $item)
	{
		$array = unserialize($serializedArray);
		if ($array) {
			foreach ($array as $k => $v) {
				if ($v['login'] === $_POST['login']){
					echo "ERROR\n";
					exit();
				}
			}
		}
		$array[] = $item;
		return serialize($array);
	}

	if (!$_POST['login'] || !$_POST['passwd'] || !$_POST['submit'] || !$_POST['submit'] === "OK"){
		echo "ERROR\n";
		exit();
	}
	if (!file_exists("../private")){
		mkdir("../private");
		if (!file_exists("../private/passwd")){
			file_put_contents("../private/passwd", "");
		}
	}
	$file = file_get_contents('../private/passwd');

	$tmp_user['login'] = $_POST['login'];
	$tmp_user['passwd'] = hash("sha512", $_POST['passwd']);
	$data = add($file, $tmp_user);
	file_put_contents("../private/passwd", $data);
	echo "OK\n";
?>
