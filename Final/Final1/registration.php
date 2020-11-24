<?php include_once "registration_validation.php" ;?>
<html>
	<head>
		<title>Registation</title>
	</head>
	<body>
		
		<h1>Welcome to Registration</h1>
		<form action="" method="post">
			
				<table>
					
					<tr>
						<td align="left">Username:</td>
						<td><input type="text" value="<?php echo $uname?>" name="uname"><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td align="left">Password:</td>
						<td><input type="password" value="<?php echo $pass?>" name="pass"><span><?php echo $err_pass;?></span></td>
					</tr>
					
					<tr>
						<td align="left">Gender: </td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female 
							<span><?php echo $err_gender;?></span>
						</td>
					</tr>
					
					<tr>
						<td align="left">Contact No.:</td>
						<td>
							<input type="text" value="<?php echo $phone_no ?>" name="phone_no">
							<span><?php echo $err_phone; ?></span>
						</td>
					</tr>
					
					<tr>
						<td colspan="2" align="center"><input type="submit" name="registration" value="registration"></td>
					</tr>
				</table>
			
		</form>
	</body>
	
</html>