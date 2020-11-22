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