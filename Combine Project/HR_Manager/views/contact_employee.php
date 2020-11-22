<?php include_once "../php/contact_validation.php" ;
   
    session_start();
    if(!isset($_SESSION["username"])){
		header("Location: hrlogin.php");
	}

?>
<!DOCTYPE html>
<html>
	<head>
	     <title>Contact with Employee</title>
	</head>
	<body>
			<form action="" method="post">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
				    <tr>
						<!--<td>&nbsp;</td>-->
						<td align="center"><font size="6">Contact</font></td>
					</tr>
				</table>
				<br>
				<br>
			    <table border="0" width="40%" cellpadding="10" cellspacing="0" align="center">
				  <tr>
					  <td align="center" style="color:red;">* Fields are required</td>
				  </tr>
				  <tr>
					  <td width="30%><font size="4">Name:</font></td>
					   <td width="10%"><input type="text" value="<?php echo $name?>" name="name"></td>
					  <td><span style="color:red;">*<?php echo $err_name;?></span></td>
				  </tr>
				  <tr>
					  <td><font size="4">E-mail:</font></td>
					  <td><input type="text" value="<?php echo $email?>" name="email"></td>
					  <td><span style="color:red;">*<?php echo $err_email;?></span></td>
				  </tr>
                  <tr>
					  <td><font size="4">Message:</font></td>
					  <td><textarea value="<?php echo $message?>" name="message"></textarea></td>
					  <td><span style="color:red;">*<?php echo $err_message;?></span></td>
				  </tr>	
				  <tr>
					  <td colspan="2" align="center">
						  <button type="submit" name="send"><font size="4">Send</font></button>
					  </td>		
                  </tr>				  
			    </table>

			</form>
	</body>
</html>