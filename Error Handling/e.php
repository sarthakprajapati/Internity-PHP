<?php 
function customError($errno,$errstr)
{
	echo ("<b>Error :</b> [$errno] $errstr");
}

set_error_handler("customError");

echo($test);
?>