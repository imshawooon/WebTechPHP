<?php include_once "../php/employee_validation.php" ;

    session_start();
    if(!isset($_SESSION["username"])){
		header("Location: hrlogin.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
	    <title>Employee Registration</title>
	</head>
	<body>
			<form action="" method="post">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
				    <tr>
						<!--<td>&nbsp;</td>-->
						<td align="center"><font size="6">Employee Registration</font></td>
					</tr>
				</table>
				<br>
				<br>
			    <table border="0" width="40%" cellpadding="10" cellspacing="0" align="center">
				  <tr>
					  <td align="center" style="color:red;">* Fields are required</td>
				  </tr>
				  <tr>
					  <td><font size="4">Employee Id:</font></td>
					  <td><input type="text" value="<?php echo $eid?>" name="eid"></td>
					  <td><span style="color:red;">*<?php echo $err_eid;?></span></td>
				  </tr>
				  <tr>
					  <td><font size="4">Name:</font></td>
					  <td><input type="text" value="<?php echo $name?>" name="name"></td>
					  <td><span style="color:red;">*<?php echo $err_name;?></span></td>
				  </tr>
				  <tr>
					  <td><font size="4">Username:</font></td>
					  <td><input type="text" value="<?php echo $username?>" name="username"></td>
					  <td><span style="color:red;">*<?php echo $err_username;?></span></td>
				  </tr>
				  <tr>
					  <td><font size="4">Password:</font></td>
					  <td><input type="password" value="<?php echo $pass?>" name="pass"></td>
					  <td><span style="color:red;">*<?php echo $err_pass;?></span></td>
				  </tr>
				  <tr>
					  <td><font size="4">Confirm Password:</font></td>
					  <td><input type="password" value="<?php echo $cpass?>" name="cpass"></td>
					  <td><span style="color:red;">*<?php echo $err_cpass;?></span></td>
				  </tr>
				  <tr>
					  <td><font size="4">E-mail:</font></td>
					  <td><input type="text" value="<?php echo $email?>" name="email"></td>
					  <td><span style="color:red;">*<?php echo $err_email;?></span></td>
				  </tr>
				  <tr>
					  <td><font size="4">Gender:</font></td>
					  <td>
					      <input type="radio" name="gender" value="Male"> Male
					      <input type="radio" name="gender" value="Female"> Female
					  <td><span style="color:red;">*<?php echo $err_gender;?></span></td>
					  </td>
				  </tr>
				  <tr>
					  <td><font size="4">Date of Birth:</font></td>
					  <td><input type="date" value="<?php echo $dbirth?>" name="dbirth"></td>
					  <td><span style="color:red;">*<?php echo $err_dbirth;?></span></td>
				  </tr> 
				  <tr>
					  <td><font size="4">Phone:</font></td>
					  <td><input type="text" value="<?php echo $email?>" name="phone"></td>
					  <td><span style="color:red;">*<?php echo $err_phone;?></span></td>
				  </tr> 
                  <tr>
					  <td><font size="4">Address:</font></td>
					  <td><textarea value="<?php echo $address?>" name="address" ></textarea></td>
					  <td><span style="color:red;">*<?php echo $err_address;?></span></td>
				  </tr>	
                  <tr>
				      <td><font size="4">City:</font></td>
					  <td><select style="width:100px" name="city">
					         <option disabled selected>City</option>
					         <option>Dhaka</option>
							 <option>Chittagong</option>
							 <option>Rajshahi</option>
							 <option>Rangpur</option>
							 <option>Khulna</option>
						  </select>
					  </td>
					  <td><span style="color:red;">*<?php echo $err_city;?></span></td>
                  </tr>
				  <tr>
				      <td><font size="4">Salary:</font></td>
					  <td><input type="text" value="<?php echo $salary?>" name="salary"></td>
					  <td><span style="color:red;">*<?php echo $err_salary;?></span></td>
                  </tr>
				  <tr>
					  <td><font size="4">Joining Date:</font></td>
					  <td><input type="date" value="<?php echo $jdate?>" name="jdate"></td>
					  <td><span style="color:red;">*<?php echo $err_jdate;?></span></td>
				  </tr>
				  </tr>
				  <tr>
					  <td colspan="2" align="center">
						  <button type="submit" name="register"><font size="4">Submit</font></button>
					  </td>		
                  </tr>				  
			    </table>

			</form>
	</body>
</html>