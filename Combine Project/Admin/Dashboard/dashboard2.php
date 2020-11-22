<?php
	#session_start();
	if(!isset($_COOKIE['employee']))
	{
		header("location:../login.php");
	}
?>

<h1>Welcome <?php #echo $_SESSION['employee']."<br>" ; 
echo $_COOKIE['employee']; 

 ?>
</h1>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<a href="Employee/duplicate.php">Employee Management</a> <br>
	<a href="About Us/about.html">Employee Management</a>
</head>
<body>

</body>
</html>