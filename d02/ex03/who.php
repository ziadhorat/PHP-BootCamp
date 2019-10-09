#!/usr/bin/env php
<?php
date_default_timezone_set("Africa/Johannesburg");
$file = fopen("/var/run/utmpx", "rb");
fseek($file, 1256);
while (!feof($file)){
	$data = fread($file, 628);
	if (strlen($data) == 628){
		$data = unpack("a256user/a4id/a32line/ipid/itype/itime", $data);
		if ($data['type'] == 7)
			echo trim($data['user']) . " " . trim($data['line']) . "  " . date("M d H:i", $data['time']) . " \n";
	}
}
?>
