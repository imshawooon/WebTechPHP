<?php
	require_once 'models/db_connect.php';

	$hasError=false;

	if(isset($_POST["login"])){
		if(!$hasError){

			$uname= $_POST["uname"];
			$pass= $_POST["pass"];
			$result = authenticate($uname,$pass);
			if($result){
				header("Location: dashboard.php");
			}
			else{
				echo "Invalid Username or Password";
			}
		}
	}
	
	function authenticate($uname,$pass){
		//$pass = md5($pass);
		$query = "SELECT username FROM admin WHERE Username='$uname' AND Password='$pass'";
		$result = get($query);
		if(count($result) > 0) return true;
		
		return false;
	}
	
?>


<html>
	<head></head>
	<body>
		
			<h1>LogIn</h1>

			<form method="post" onsubmit="return validate()" action="">
				<table>
					<tr>
						<td>Username:</td>
					</tr>
					<tr>
						<td><input type="text" id="uname" name="uname"><span id="err_uname"></span></td>
					</tr>
					<tr>
						<td>Password:</td>
					</tr>
					<tr>
						<td><input type="password" id="pass" name="pass"><span id="err_pass"></span></td>
					</tr>
					<tr>
						<td><input type="submit" name="login" value="login"></td>
					</tr>
					
				</table>
			</form>

			<script src="js/index.js">
			
		</script>
	</body>
</html>