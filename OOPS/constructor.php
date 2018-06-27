<?php 
class ClassName
{
	function __construct()
	{
		echo "Constructor Called";
	}
	function __destruct() 
  {
    echo "\n Destructor Called ";
  }
}
$obj = new ClassName;
 ?>