<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

	<form method="GET">
		<div class="form-group">
   			 <label for="query" class="col-sm-2 col-form-label">SQL QUERY</label>
    		 <input type="text" class="form-control" name="query" id="query" placeholder="SQL query">
 		</div>
 		    <button type="submit" class="btn btn-primary class="col-sm-2 col-form-label col-form-label-sm"">Submit</button>
	</form>


	<?php include 'connect_database.php';
		if($_SERVER["REQUEST_METHOD"] == "GET")
		{$query = $_GET['query'];
			
			if($conn->query($query)==TRUE)
			{
				echo "<div class= \"alert alert-success\">"."
  <strong>Success!</strong> Query has been processed! </div>";
			}else{
				echo "<div class=\"alert alert-danger\">
  <strong></strong> Something Went Wrong! </div>";
			}
		}
		$conn->close();
	 ?>
</body>
</html>