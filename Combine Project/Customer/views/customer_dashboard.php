<?php
    session_start();
    if(!isset($_SESSION["username"])){
		header("Location: customerlogin.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
	    <title>Customer</title>
	</head>
	<body>
			<form action="" method="post">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
				    <tr>
						<!--<td>&nbsp;</td>-->
						<td align="center"><font size="6">Customer</font></td>
					</tr>
				</table>
				<br>
				<br>
			    <table border="1" width="40%" cellpadding="10" cellspacing="0" align="center">
				  	<tr>
					    <td>
							 <ul>
								 <li><a href="customer_profile.php">Profile</a></li>
								 <li><a href="products_info.php">Product Information</a></li>
								 <li><a href="../php/logout.php">Log Out</a></li>
							 </ul>
						</td>
                    </tr>					
			    </table>

			</form>
	</body>
</html>