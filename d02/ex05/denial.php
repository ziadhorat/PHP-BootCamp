#!/usr/bin/php
<?php
	if ($argc != 3 || !file_exists($argv[1]))
		exit();

	function isValidPHP($str){
		return trim(shell_exec("echo " . escapeshellarg($str) . " | php -l")) == "No syntax errors detected in -";
	}
	$fd = fopen($argv[1], 'r');
	while ($fd && !feof($fd))
		$array[] = explode(";", fgets($fd));
	$format = $array[0];

	unset($array[0]);
	foreach ($format as $k => $v)
		$format[$k] = trim($v);
	$index = array_search($argv[2], $format);
	if ($index === false)
		exit();
	foreach ($format as $h_k => $h_v){
		$tmp = [];
		foreach ($array as $a_v)
			if (isset($a_v[$index]))
				$tmp[trim($a_v[$index])] = trim($a_v[$h_k]);
		$$h_v = $tmp;
	}
	while (1){
		echo "Enter your command: ";
		$com = fgets(STDIN);
		if ($com == null){
			echo "\n";
			break ;
		}
		if (isValidPHP("<?php " . $com) ? "Valid" : "Invalid" == "Valid")
			eval ($com);
		else
			echo "PHP Parse error: Syntax error, unexpected T_STRING in [....]\n";
	}
?>