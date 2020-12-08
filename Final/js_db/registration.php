<?php
	require_once 'models/db_connect.php';
	
	$hasError=false;
	if(isset($_POST["registration"])){
		
		if(!$hasError){
			
			$name= $_POST["name"];
			$uname= $_POST["uname"];
			$pass= $_POST["pass"];
			$email= $_POST["email"];
			$phone= $_POST["phone"];

			addUser($name,$uname,$pass,$email,$phone);
			header("Location: index.php");
		}
	}
	
	function addUser($name,$uname,$pass,$email,$phone)
	{
		$p = md5($_POST["pass"]);
		$query= "INSERT INTO users VALUES ('$name','$uname','$pass','$email','$phone')";
		execute($query);	
	}
	
	
?>

<html>
	<head>
		<title>Registation</title>
	</head>
	<body>
		
		<h1>Welcome to Registration</h1>
		<form method="post" onsubmit="return validate()" action="">
			
				<table>
					

					<tr>
						<td align="left">Name:</td>
						<td><input type="text" id="name"  name="name"><span id="err_name"></span></td>
					</tr>
					<tr>
						<td align="left">Username:</td>
						<td><input type="text" id="uname" name="uname"><span id="err_uname"></span></td>
					</tr>
					<tr>
						<td align="left">Password:</td>
						<td><input type="password" id="pass" name="pass"><span id="err_pass"></span></td>
					</tr>
					
					<tr>
						<td align="left">Email:</td>
						<td><input type="text" id="email" name="email"><span id="err_email"></span></td>
					</tr>
					
					<tr>
						<td align="left">Phone:</td>
						<td>
							<input type="text" id="phone" name="phone">
							<span id="err_phone"></span>
						</td>
					</tr>
					
					<tr>
						<td colspan="2" align="center"><input type="submit" name="registration" value="registration"></td>
					</tr>
				</table>
			
		</form>

		<script src="js/register.js">
			
		</script>
	</body>
	
</html>