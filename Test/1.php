<?php 
$f = fopen("file.txt", "r");
$t=fread($f, 100000);
$k=array_count_values(str_word_count($t, 1));
foreach ($k as $key => $value) {
	echo "$key : <strong>$value</strong><br>";
}
 ?>