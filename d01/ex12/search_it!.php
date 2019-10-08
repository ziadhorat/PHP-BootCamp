#!/usr/bin/php
<?php
if ($argc > 1){
	for ($i = 2; $i < $argc; $i++)
		if ($argv[1] == substr($argv[$i], 0, strlen($argv[1])))
			$finalKey = substr($argv[$i], strlen($argv[1]) + 1);
	echo $finalKey;
}
?>
