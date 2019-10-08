#!/usr/bin/php
<?php
if ($argc == 2){
	echo preg_replace('/\s+/', ' ', trim($argv[1]));
}
?>
