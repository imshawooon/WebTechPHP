<?php include_once "login_validation.php" ;?>

<html>
	<head></head>
	<body>
		
			<h1>LogIn</h1>

			<form action="" method="post">
				<table>
					<tr>
						<td>Username:</td>
					</tr>
					<tr>
						<td><input type="text" value="<?php echo $uname?>" name="uname"></td>
					</tr>
					<tr>
						<td>Password:</td>
					</tr>
					<tr>
						<td><input type="password" value="<?php echo $pass?>" name="pass"></td>
						<td><input type="submit" name="login" value="login"></td>
					</tr>
					
				</table>
			</form>
	</body>
</html>