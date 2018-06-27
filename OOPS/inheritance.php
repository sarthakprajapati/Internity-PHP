<?php 
class ClassName
{
	function __construct()
	{
		echo "Constructor of Base Class Called<br>";
	}
	function __destruct() 
  {
    echo "Destructor of Base Class Called<br>";
  }
}

class SubClassName extends ClassName
{
	
	function __construct()
	{
		echo "Constructor of SubClass Called<br>";
	}

	function __destruct()
	{
		echo "Destructor of SubClass Called<br>";
	}
}

$obj = new ClassName;
$obj1 = new SubClassName;
 ?>