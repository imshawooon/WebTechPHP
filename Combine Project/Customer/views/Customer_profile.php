<?php
    session_start();
    if(!isset($_SESSION["username"])){
		header("Location: customerlogin.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
	   <title>Employee Information</title>
	</head>
	<body>
			<form action="" method="post">
			    <h2 align="center"><font size="6">Your Information</font></h2>
				<br>
				<br>
				<table border="1" width="100%" cellpadding="10" cellspacing="0" align="center">	
					<tr>	
						<td>Name</td>
						<td>Username</td>
						<td>Email</td>
						<td>Gender</td>
						<td>Phone</td>
						<td>Address</td>
						<td>City</td>
                    </tr>
               <?php 
				$customers = simplexml_load_file("customer.xml");
				$data = $customers->customer;
				$serial="";
				$ename="";
				$uname="";
				$email="";
				$gender="";
				$phone="";
				$address="";
				$city="";
				
				$i=0;
				for( ;$i<count($data);$i++)
				{
					$ename=$data[$i]->name;
					$uname=$data[$i]->username;
					$email=$data[$i]->email;
					$gender=$data[$i]->gender;
					$phone=$data[$i]->phone;
					$address=$data[$i]->address;
					$city=$data[$i]->city;
		
					echo "<tr>
					<td>$ename</td>
					<td>$uname</td>
					<td>$email</td>
					<td>$gender</td>
					<td>$phone</td>
					<td>$address</td>
					<td>$city</td>
					</tr>";		
				}
			?>					
			    </table>
			</form>
	</body>
</html>