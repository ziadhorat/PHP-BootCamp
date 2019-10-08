#!/usr/bin/php
<?php
$arr = array();
for ($i = 1; $i < $argc; $i++){
	array_push($arr, array_filter(explode(' ',$argv[$i])));
}
$n = 0;
for ($i = 0; $arr[$i][0]; $i++){
	for ($x = 0; $arr[$i][$x]; $x++){
		$arr2[$n] = $arr[$i][$x];
		$n++; 
	}
}
sort($arr2);
print_r($arr2);
?>
