<?php 
$x = array(0=>"A",1=>"B",2=>"C",3=>"D");
if($_SERVER["REQUEST_METHOD"]=="GET")
{$value = $_GET["value"];
if($value>3){
	echo("Invalid Index");
}else
for ($i=0;$i<count($x);$i++){
	echo $x[$value];
	$value++;
	if($value>count($x)-1){
		$value=0;
	}
	}
}

?>