#!/usr/bin/php
<?php
if ($argc > 1){
	$arr = array_filter(explode(' ', preg_replace('/\s+/', ' ', $argv[1])));
	$temp = $arr[0];
	$arr[0] = $arr[count($arr)];
	$arr[count($arr)] = $temp;
	for ($i = 1; $i <= count($arr); $i++)
		$str = $str . " " . $arr[$i];
	echo (trim($str)) . PHP_EOL;
}
?>
