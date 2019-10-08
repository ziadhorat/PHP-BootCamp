#!/usr/bin/php
<?php
if ($argc > 1){
	$arr = array();
	for ($i = 1; $i < $argc; $i++)
		array_push($arr, array_filter(explode(' ',$argv[$i])));
	$n = 0;
	for ($i = 0; $arr[$i][0]; $i++)
		for ($x = 0; $arr[$i][$x]; $x++)
			$arr2[$n++] = $arr[$i][$x];
	usort($arr2, 'strnatcasecmp');
	$n = 0;
	for($i = 0; $i < 3; $i++)
		for ($j = 0; $j < count($arr2); $j++)
			if ($i == 0 && ctype_alpha($arr2[$j][0]))
				$arr3[$n++] = $arr2[$j];
			else if ($i == 1 && is_numeric($arr2[$j][0]))
				$arr3[$n++] = $arr2[$j];
			else if ($i == 2 && !is_numeric($arr2[$j][0]) && !ctype_alpha($arr2[$j][0]))
				$arr3[$n++] = $arr2[$j];
	foreach ($arr3 as $item)
		echo $item , PHP_EOL;
}
?>
