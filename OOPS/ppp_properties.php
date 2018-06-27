<?php 
class ClassName
{
	public $name_public = "Sarthak (public)";
	protected $name_protected = "Sarthak (protect)";
	private $name_private = "Sarthak (private)";

	function echoall(){
		echo $this->name_public."<br>";
		echo $this->name_protected."<br>";
		echo $this->name_private."<br>";
	}
}

$obj = new ClassName;
$obj->echoall();
echo $obj->name_public."<br>";
echo $obj->name_protected."<br>";
echo $obj->name_private."<br>";


 ?>