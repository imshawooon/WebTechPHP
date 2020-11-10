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
						<td align="left">Full Name:</td>
						<td><input type="text" value="<?php echo $name?>" name="name"><span><?php echo $err_name;?></span></td>
					</tr>
					<tr>
						<td align="left">Username:</td>
						<td><input type="text" value="<?php echo $uname?>" name="uname"><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td align="left">Password:</td>
						<td><input type="password" value="<?php echo $pass?>" name="pass"><span><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
						<td align="left">Confirm Password:</td>
						<td><input type="password" value="<?php echo $pass?>" name="pass"></td>
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
						<td align="left">E-mail Address:</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align="left">Contact No.:</td>
						<td>
							<input type="text">
							<span><?php echo $err_phone; ?></span>
						</td>
					</tr>
					<tr>
						<td align="left">City</td>
						<td>
							<select>
								<option disabled selected>City</option>
								<option>Dhaka</option>
								<option>Khulna</option>
								<option>Rajshahi</option>
													
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="ok" value="ok"></td>
					</tr>
				</table>
			
		</form>
	</body>
	
</html>