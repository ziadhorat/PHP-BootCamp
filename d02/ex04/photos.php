#!/usr/bin/php
<?php
	if ($argc != 2)
		exit();
	$html = file_get_contents($argv[1]);
	$dir = parse_url($argv[1], PHP_URL_HOST);
	if (!file_exists($dir))
		mkdir($dir);
	preg_match_all('|<img .*?src=[\'"](.*?)[\'"].*?>|i', $html, $matches);
	foreach($matches[1] as $link) {
		$img = substr($link, strrpos($link, "/"));
		if (!strncmp($link, "http", 4))
			copy($link, $dir."/".$img);
		elseif (!strncmp($link, "/", 1))
			copy($argv[1].$link, $dir."/".$img);
		elseif (!strncmp($link, "./", 2))
			copy($argv[1].ltrim($link, '.'), $dir."/".$img);
		else
			copy($argv[1]."/".$link, $dir."/".$img);
	}
?>
