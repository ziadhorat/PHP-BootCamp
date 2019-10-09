#!/usr/bin/php
<?php
if ($argc > 1){
	$my_file = $argv[1];
	if (!file_exists($my_file)){
		echo "Unable to open file!\n";
		return 0;
	}
	$handle = fopen($my_file, 'r');
	$data = fread($handle,999999);
	$title = 0; //Title
	$text = 0; //Text
	$state = 0; //State 0 =    1 = <a    2 = capitalize
	for ($i = 0; $i < filesize($my_file); $i++){
		if (($data[$i] == '<') && ($data[$i+1] == 'a'))
			$state = 1; //Starting					0->1
		if ($state == 1 && $data[$i - 1] == '>')
			$state = 2;	//Start in between <>		1->2
		if (($state == 1) && ($data[$i] == '>'))
				$state = 2; //Begin betwee<>
		if ($data[$i] == '<' && $state == 2)
			$state = 1; //After in between <>		2->1
		if (($data[$i] == '/') && ($data[$i+1] == 'a') && ($data[$i+2] == '>'))
			$state = 0; //Finished					1->0
		if (($state)==1 && ($data[$i]) == '"' && ($data[$i-1]) == '=' && ($data[$i-2]) == 'e' && ($data[$i-3]) == 'l' && ($data[$i-4]) == 't' && ($data[$i-5]) == 'i' && ($data[$i-6]) == 't')
			$state = 2; //beigin title						1->2
		else if ($state == 2 && $data[$i] == '"')
			$state = 1; //end title					2->1
		if ($state == 2)
			$data[$i] = strtoupper($data[$i]);
	}
	echo $data;
}
?>
