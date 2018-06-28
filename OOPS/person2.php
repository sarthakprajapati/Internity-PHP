<?php  class person2{
	public $person_first_name = "ABC";
	public $person_last_name = "XYZ";
	public $person_age = 0;

	protected $username = "abc_xyz";
	private $password = "*****";

	function __construct(){
		echo "<br>Person2::Constructor:\n";
		foreach ($this as $key => $value) {
			print "$key=> $value\n";
		}
	}
}
?>