<?php
	function auth($login, $passwd)
	{
		if (file_exists("../private/passwd"))
			$serializedArray = file_get_contents('../private/passwd');
		else
			return FALSE;
		$array = unserialize($serializedArray);
		$found = 0;
		if ($array) {
			foreach ($array as $k => $v)
				if (($v['login'] === $login) && ($v['passwd'] === hash("sha512", $passwd)))
					return TRUE;
			if ($found === 0) 
				return FALSE;
		}
	}
?>
