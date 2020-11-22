<?php
    session_start();
    if(!isset($_SESSION["username"])){
		header("Location: hrlogin.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>HR Manager</title>
	<meta charset="UTF-8">
	<title>Hr Dashboard</title>
	<link rel="stylesheet" href="css/hr_style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	</head>
	<body>
	      <div class="wrapper">
		     <div class="sidebar">
			     <h2>HR Manager</h2>
				 <ul>
				     <li><a href="hr_profile.php">Profile</a></li>
				     <li><a href="changepassword.php">Change Password</a></li>
					 <li><a href="contact_with.php">Contact</a></li>
					 <li><a href="../php/logout.php">Log Out</a></li>
				 </ul>
		     </div>
		   
	         <div class="main_content">
		        <div class="header"><h2>Welcome Md. Alimul Reza</h2></div>
				<div class="btn">
				<br>
				<br>
				     <button type="button" onclick="document.location='employee_info.php'">Employee</button>
					 <button type="button" onclick="document.location='products_info.php'">Products</button>
				</div>
			 </div>
		  </div>
	</body>
</html>