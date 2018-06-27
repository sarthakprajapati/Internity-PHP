<?php
function customError($errno,$errstr){
	echo "<b>Error : </b> [$errno] $errstr <br>";
	echo "Admin has been notified at sarthakprajapati@live.in";
	error_log("<b>Error : </b> [$errno] $errstr <br>",1,"sarthakprajapati@live.in","From: sarthakprajapatij7@gmail.com");
}

set_error_handler("customError",E_USER_WARNING);
$username = "sarthak_ishu11";
if($username!="sarthak_ishu")
{
	trigger_error("User not found", E_USER_WARNING);
}
?>