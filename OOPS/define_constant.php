<?php 
class MyClassname{
const constant1 = "Sarthak";
function printconstant()
	{
        echo self::constant1;
	
}
}

 $class = new MyClassname();
  $class->printconstant();
  echo $class::constant1."<br>"; // As of PHP 5.3.0

	?>
