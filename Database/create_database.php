<?php 
require 'connect.php';
$query = "Create database internity2";
if($conn->query($query)===True){
	echo "Database created successfully";
}else {
	echo "Error creating database";
}
$conn->close();
?> 