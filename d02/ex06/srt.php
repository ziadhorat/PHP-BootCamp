#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		function cmp($a, $b)
		{
			return strcmp($a["Time"], $b["Time"]);
		}

		if (!file_exists($argv[1]))
			exit();
		$lines = count(file($argv[1]));

		if ($lines % 4 == 0)
		{
			$i = 0;
			$c = 0;
			$handle = fopen($argv[1], "r");

			while (($line = fgets($handle)) !== false)
			{
				if ($i == 4)
				{
					$c += 1;
					$i = 0;
					$data[$c][$i] = $line;
				}
				if ($i == 1)
					$data[$c]['Time'] = $line;
				if ($i == 2)
					$data[$c]['Text'] = $line;
				$data[$c][$i] = $line;
				$i++;
			}

			usort($data, "cmp");
			$i = 1;
			foreach ($data as $item)
			{
				echo $i ."\n" . $item['Time'] . $item['Text'] . "\n\n";
				$i ++;
			}
		}
	}
?>