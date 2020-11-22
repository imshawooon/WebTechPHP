<?php
    session_start();
    if(!isset($_SESSION["username"])){
		header("Location: hrlogin.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	 <title>Contact</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/contact_style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	</head>
	<body>
	      <div class="wrapper">
		     <div class="sidebar">
			     <h2><a href="hr_dashboard.php">HR Manager</a></h2>
		     </div>
	         <div class="main_content">
		        <div class="header"><h2>Contact</h2></div>
				<div class="btn">
				<br>
				<br>
				<br>
				<br>
				     <button type="button" onclick="document.location='contact_marketing.php'">Marketing Manager</button>
					 <button type="button" onclick="document.location='contact_customer.php'">Customer</button>
					 <button type="button" onclick="document.location='contact_employee.php'">Emloyee</button>
				</div>
			 </div>
		  </div>
	</body>
</html>