<?PHP
function ft_is_sort($arr) {
	$arr2 = $arr;
	sort ($arr2);
	return ($arr2 == $arr ? True : False);
}
?>
