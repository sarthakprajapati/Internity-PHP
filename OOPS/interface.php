<?php 
interface MyInterfaceName{
	public function method1();
	public function method2();
}
class MyClassName implements MyInterfaceName{
	public function method1(){
		echo "Method1 Called<br>";
	}
	public function method2(){
		echo "Method2 Called<br>";
	}
} 
$obj = new MyClassName;
$obj->method1();
$obj->method2();
 ?>