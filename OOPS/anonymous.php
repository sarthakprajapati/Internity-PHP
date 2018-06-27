<?php 
$obj = new class("Sarthak Prajapati"){
	function __construct($ro){
		$this->readonly=$ro;
	}
	private $readonly;

	function print(){
		echo $this->readonly;
	}
};

echo $obj->print();
?>