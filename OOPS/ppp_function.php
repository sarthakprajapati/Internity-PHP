<?php
// Define a class
class Myclass
 {
 // Declare a public method
  public function my_public_method()
 {
 echo "This is a Public method"; 
 } 
 private function my_private_method()
 {
 echo "This is a Private method"; 
 }
 protected function my_protected_method()
 {
 echo "This is a Protected method"; 
 } 
 // This is public
 function test()
 {
 $this->my_public_method();
 $this->my_private_method();
 $this->my_protected_method();
 }
 }
 $obj = new MyClass;
 $obj->my_public_method(); //Display This is a Public method
 $obj->my_private_method();//Fatal error: Call to private method Myclass::my_private_method() from context C:\xampp\htdocs\internity\oops\ppp_function.php on line 28
 $obj>my_protected_method();//Fatal error: Call to undefined function my_protected_method() in C:\xampp\htdocs\internity\oops\ppp_function.php on line 29 
 $obj->test(); //Display This is a Public methodThis is a Private methodThis is a Protected method
?>
