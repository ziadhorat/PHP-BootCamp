#!/usr/bin/php
<?php
if ($argc == 2){
	$str = trim(preg_replace('/\s+/', '', $argv[1]));
	for ($i = 0; $i < strlen($str); $i++)
		if (!is_numeric($str[$i]))
		{
			$tmp = $i;
			break;
		}
	for ($i = $tmp + 1; $i < strlen($str); $i++)
		if (!is_numeric($str[$i]))
		{
			echo "Syntax Error";
			exit();
		}
	$num1 = intval($str);
	$str2 = substr($str, strlen($num1) + 1);
	$num2 = intval($str2);
	if ($str[$tmp] == '+')
		echo $num1 + $num2;
	else if ($str[$tmp] == '-')
		echo $num1 - $num2;
	else if ($str[$tmp] == '/')
		echo $num1 / $num2;
	else if ($str[$tmp] == '*')
		echo $num1 * $num2;
	else if ($str[$tmp] == '%')
		echo $num1 % $num2;
	else
		echo "Syntax Error";
} else
echo "Incorrect Parameters";
?>
