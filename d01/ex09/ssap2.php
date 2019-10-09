#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$word = explode(" ", $str);
		$sort_word = array_values(array_filter($word));
		sort($sort_word);
		return ($sort_word);
	}
	function ssap_sort($a, $b)
	{
		$i = 0;
		$line = "abcdefghijklmnopqrstuvwxyz1234567890!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
		while (($i < strlen($a)) || ($i < strlen($b)))
		{
			$a_i = stripos($line, $a[$i]);
			$b_i = stripos($line, $b[$i]);
			if ($a_i > $b_i)
				return (1);
			elseif ($a_i < $b_i)
				return (-1);
			else
				$i++;
		}
	}
	if ($argc > 1) {
		$words = array();
		for ($i=1; $i < count($argv); $i++) {
			$str = trim(preg_replace("/\s+/", " ", $argv[$i]));
			$strs_split = ft_split($str);
			for ($j=0; $j < count($strs_split); $j++) {
				$word = array_push($words, $strs_split[$j]);
			}
		}
		usort($words, "ssap_sort");
		for ($i=0; $i < count($words); $i++)
			echo ($words[$i]."\n");
	}
?>
