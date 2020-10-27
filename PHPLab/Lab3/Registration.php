<?php
	

	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$gender="";
	$err_gender="";
	$hear="";
	$err_hear="";
	$has_error = false;
	
	if(isset($_POST["register"])){
		if(empty($_POST["name"])){
			$err_name=" *Name Required";
			$has_error = true;
		}elseif(strpos($_POST["name"],"abcd")){
			$err_name="Consequtive abcd cant not be a name";
			$has_error = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}

		if(empty($_POST["username"])){
			$err_username=" *Username required";
			$hasError = true;
		}
		elseif(strlen($_POST["username"]) < 6){
			$err_username="*Username must be 6 characters long";
			$hasError = true;
		}
		else{
			$username=$_POST["username"];
		}

		if(empty($_POST["password"])){
			$err_password=" *Password required";
			$hasError = true;
		}
		elseif(strlen($_POST["password"]) < 8){
			$err_password="*Password must be 8 characters long";
			$hasError = true;
		}
		else{
			$password=$_POST["password"];
		}

		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["hear"])){
			$err_hobbies = "At least select 1 option";
			$has_error = true;
		}
		else{
			$hobbies=$_POST["hear"];
		}
		
		if(!$has_error){
			echo $name;
		}
	}
	
?>
<html>
	<head>
		<title>Registation</title>
	</head>
	<body>
		
		<hr>
		<form action="" method="post">
			<fieldset>
				<legend>Club Member Registration</legend>
				<table>
					<tr>
						<td align="right">Name:</td>
						<td><input type="text" name="Name"><span><?php echo $err_name;?></span></td>
					</tr>
					<tr>
						<td align="right">Username:</td>
						<td><input type="text"><span><?php echo $err_username;?></span></td>
					</tr>
					<tr>
						<td align="right">Password:</td>
						<td><input type="password" name="password"><span><?php echo $err_password;?></span></td>
					</tr>
					<tr>
						<td align="right">Confirm Password:</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td align="right">Email:</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align="right">Phone</td>
						<td>
							<input type="text" placeholder="code" size="3"> -
							<input type="text" placeholder="Number" size="9">
						</td>
					</tr>
					<tr>
						<td align="right">Address:</td>
						<td><input type="text" placeholder="Street Address"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="text" placeholder="City" size="6"> -
							<input type="text" placeholder="State" size="6">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="text" placeholder="Postal/Zip Code">
						</td>
					</tr>
					<tr>
						<td align="right">Birth Date</td>
						<td>
							<select>
								<option disabled selected>Day</option>
								<?php
									for ($i=1; $i<=31 ; $i++) { 
										echo "<option>$i</option>";
									}
								?>					
							</select>
							<select>
							<option disabled selected>Month</option>
								<?php
									$arr = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "July","Aug","Sep","Oct","Nov","Dec");
									foreach ($arr as $a) {
									 	echo "<option>$a</option>";
									 }
								?>						
							</select>
							<select>
							<option disabled selected>Year</option>
							<option>1999</option>
							<option>1998</option>
							<option>1997</option>						
							</select>
						</td>
					</tr>
					<tr>
						<td align="right">Gender: <?php echo $err_gender;?></td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
						</td>
					</tr>
					<tr>
						<td align="right">Where did you hear<br>about us?  <?php echo $err_hear;?></td>
						<td>
							<input type="checkbox" name="hear[]" value="A Friend or Colleague">A Friend or Colleague<br>
							<input type="checkbox" name="hear[]" value="Google">Google<br>
							<input type="checkbox" name="hear[]" value="Blog Post">Blog Post<br>
							<input type="checkbox" name="hear[]" value="News Article">News Article<br>
						</td>
					</tr>
					<tr>
						<td align="right">Bio:</td>
						<td>
							<textarea name="bio" ></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="register" value="register"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
	
</html>