<?php 
function randStrGen($len) {
	$result = "";
	$chars = "abcdefghijklmnopqrstuvwxyz$@?!-0123456789";
	$charArray = str_split($chars);
	for($i = 0; $i < $len; $i++){
		$randItem = array_rand($charArray);
		$result .= "".$charArray[$randItem];
	}
	return $result; //echo's random str 10 chars in length
}
?>
