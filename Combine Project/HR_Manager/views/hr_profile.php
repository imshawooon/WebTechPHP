<?php
    session_start();
    if(!isset($_SESSION["username"])){
		header("Location: hrlogin.php");
	}
   $firstname="Md. Alimul";
   $lastname="Reza";
   $password="12345678";
   $email="alimulreza@gmail.com";
   $gender="Male";
   $address="Block-D, Road-04, Bashundhara R/A";
   $contact="01775310047";
?>
<!DOCTYPE html>
<html>
	<head>
	    <title>Profile</title>
	</head>
	<body>
			<form action="" method="post">
			    
				<br>
				<table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
				    <tr>
						<!--<td>&nbsp;</td>-->
						<td align="center"><font size="5">Your Information</font></td>
	
					</tr>
				</table>
				<br>
				<br>
				<table border="0" width="100%" cellpadding="" cellspacing="0">
					<tr>						
					    <td>
						  <table border="1" width="50%" cellpadding="15" cellspacing="0" align="center">
						  
						    <tr>
								<td align="center"><font size="4">First Name:</font></td>
								<td align="center"><font size="4"><?php echo $firstname;?></font></td>
							</tr>
							<tr>
								<td align="center"><font size="4">Last Name:</font></td>
								<td align="center"><font size="4"><?php echo $lastname;?></font></td>
							</tr>
							<tr>
								<td align="center"><font size="4">Password:</font></td>
                                <td align="center"><font size="4"><?php echo $password;?></font></td>								
							</tr>
							<tr>
								<td align="center"><font size="4">Email:</font></td>
                                <td align="center"><font size="4"><?php echo $email;?></font></td>								
							</tr>
							<tr>
								<td align="center"><font size="4">Gender:</font></td>
                                <td align="center"><font size="4"><?php echo $gender;?></font></td>								
							</tr>
							<tr>
								<td align="center"><font size="4">Address:</font></td>	
								<td align="center"><font size="4"><?php echo $address;?></font></td>
							</tr>
							<tr>
								<td align="center"><font size="4">Contact No.:</font></td>
                                <td align="center"><font size="4"><?php echo $contact;?></font></td>								
							</tr>
							
						  </table>
						</td>  						
					</tr>	
				</table>
			</form>
	</body>
</html>