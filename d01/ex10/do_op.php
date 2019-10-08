#!/usr/bin/php
<?php
if ($argc == 4){
	$argv[1] = trim($argv[1]);
	$argv[2] = trim($argv[2]);
	$argv[3] = trim($argv[3]);
	if ($argv[2] == '+')
		echo $argv[1] + $argv[3];
	if ($argv[2] == '-')
		echo $argv[1] - $argv[3];
	if ($argv[2] == '*')
		echo $argv[1] * $argv[3];
	if ($argv[2] == '/')
		echo $argv[1] / $argv[3];
	if ($argv[2] == '%')
		echo $argv[1] % $argv[3];
	echo PHP_EOL;
} else
	echo "Incorrect Parameters\n";
?>
