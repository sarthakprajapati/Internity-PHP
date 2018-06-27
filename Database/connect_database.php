<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "internity1";

$conn= new mysqli($servername, $username , $password ,$database);
if($conn->connect_error){
	die("Connection failed : ".$conn->connect_error);
}
echo("Connected Successfully");
?> 