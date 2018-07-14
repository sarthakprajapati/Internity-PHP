<?php
$array = ['name'=>'sarthak'];
//PHP5 style
$message = isset($array['name']) ? $array['name'] : 'not set';
echo $message."<br>";
//PHP7 style
$message = $array['name'] ?? 'not set';
echo $message."<br>";
?>