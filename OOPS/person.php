<?php  class person1{
	public $person_first_name = "sarthak";
	public $person_last_name = "prajapati";
	public $person_age = 20;

	protected $username = "sarthak_ishu11";
	private $password = "*****";

	function iterateVisible(){
		echo "MyClass::iterateVisible:\n";
		foreach ($this as $key => $value) {
			print "$key=> $value\n";
		}
	}
}
?>