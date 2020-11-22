<?php include_once "../php/changepassword_validation.php" ;
    
	session_start();
    if(!isset($_SESSION["username"])){
		header("Location: hrlogin.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
	    <title>Change Password</title>
	</head>
	<body>
			<form action="" method="post">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
				    <tr>
						<!--<td>&nbsp;</td>-->
						<td align="center"><font size="6">Change Password</font></td>
					</tr>
				</table>
				<br>
				<br>
			    <table border="0" width="40%" cellpadding="10" cellspacing="0" align="center">
				  <tr>
					  <td align="center" style="color:red;">* Fields are required</td>
				  </tr>

					  <td><font size="4">Current Password:</font></td>
					  <td><input type="password" value="<?php echo $cpass?>" name="cpass"></td>
					  <td><span style="color:red;">*<?php echo $err_cpass;?></span></td>
				  </tr>
				  <tr>
					  <td><font size="4">New Password:</font></td>
					  <td><input type="password" value="<?php echo $npass?>" name="npass"></td>
					  <td><span style="color:red;">*<?php echo $err_npass;?></span></td>
				  </tr>
				  <tr>
					  <td><font size="4">Confirm New Password:</font></td>
					  <td><input type="password" value="<?php echo $cnpass?>" name="cnpass"></td>
					  <td><span style="color:red;">*<?php echo $err_cnpass;?></span></td>
				  </tr>
				  <tr>
					  <td colspan="2" align="center">
						  <button type="submit" name="update"><font size="4">Update</font></button>
					  </td>		
                  </tr>	
                  <tr>
				      <td><?php echo $change;?></td>
                  </tr>				  
			    </table>

			</form>
	</body>
</html>