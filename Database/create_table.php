<?php 
require "connect_database.php";
$query = "create table Employee (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP)";

if($conn->query($query)===True){
	echo "<br>Table Created Successfully";
}else { 
echo "<br>Error creating Table ".$conn->error;
}
$conn->close();
?> 