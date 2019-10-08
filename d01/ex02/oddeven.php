<?php
while (1) {
	$element = readline("Enter a number: ");
	if (is_numeric($element))
		echo "The number " . $element . " is ",($element % 2 == 0 ? "even" : "odd"), PHP_EOL;
	else
		echo var_export($element, true) . " is not a number", PHP_EOL;
}
?>
