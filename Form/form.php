<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>

<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	NAME: <input type="text" name="name">
	<br>PASS:  <input type="password" name="password">
	<br><input type="submit">
	<br><?php 
	
	 ?>
</form>



<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	NAME: <input type="name" name="name">
	<br>PASS:  <input type="password" name="password">
	<br><input type="submit">
	<br> 
</form>

<?php 

if($_SERVER["REQUEST_METHOD"] == "GET")
	{
	 echo ($_GET['name']." ".$_GET['password']);
	}
else
		echo ($_POST['name']." ".$_POST['password']);

	 ?>
</body>
</html>