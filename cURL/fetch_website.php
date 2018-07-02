<?php
$ch = curl_init("https://techlomedia.in/");
$fp = fopen("techlomedia.txt", "w");
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);
?>