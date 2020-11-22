<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body class="lgn">
	<div class="start">
		<form action="" method="POST">
			<center>
			<h1>Login Page</h1>
			<img src="Logo.png" class="img"/>
			</center>
			<input type="email" name="email" class="txtbox" placeholder="Enter your Email">
			<br><br>
			<input type="password" name="password" class="txtbox" placeholder="Enter your password">
			<br><br>
			<input type="submit" name="submit" class="btn">
			<br><br>
			<a href="register.php">Not registered yet? Click here to Sign-up</a>
			<br>

		</form>

		<?php 
			if (isset($_POST['email']) && isset($_POST['password']) )
			{
				$email=$_POST['email'];
				$password=$_POST['password'];

				$xml = simplexml_load_file("Employee/employee.xml");

				$employees=$xml->employee;
				$flag=false;

				foreach ($employees as $employee)
				{
					if($employee->email == $email && $employee->password==$password)
					{
						#session_start();
						#$_SESSION['employee'] = $email;
						$flag=true;
						setcookie("employee", $email, time()+120);
					}
				}

				if($flag)
				{
					header("Location: Dashboard/dashboard2.php");
				}

				else
				{
					echo "Invalid credentials";
				}
			} 
		 ?>
		
	</div>

</body>
</html>