<?php
    session_start();
    if(!isset($_SESSION["username"])){
		header("Location: hrlogin.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
	   <title>Employee Information</title>
	</head>
	<body>
			<form action="" method="post">
			    <h2 align="center"><font size="6">Employee Information</font></h2>
				<br>
				<br>
				<table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
				    <tr>
						<td colspan="2" width="8%">
								<button type="button" onclick="document.location='employee_registration.php'">Add</button>
						</td>
						<td align="right"><input type="text" placeholder="Search.."></td>
					</tr>	
				</table>
				<br>
				<br>
				<table border="1" width="100%" cellpadding="15" cellspacing="0" align="center">
					<tr>	
						<td>Serial No</td>
						<td>Employee Id</td>
						<td>Employee Name</td>
						<td>Username</td>
						<td>Email</td>
						<td>Gender</td>
						<td>Date of Birth</td>
						<td>Phone</td>
						<td>Address</td>
						<td>City</td>
						<td>Salary</td>
						<td>Joining Date</td>
						<td>Action</td>
                    </tr>
               <?php 
				$employees = simplexml_load_file("employee.xml");
				$data = $employees->employee;
				$serial="";
				$id="";
				$ename="";
				$uname="";
				$email="";
				$gender="";
				$dob="";
				$phone="";
				$address="";
				$city="";
				$salary="";
				$joining="";
				
				$i=0;
				for( ;$i<count($data);$i++)
				{
					$serial=$data[$i]->serial;
					$id=$data[$i]->eid;
					$ename=$data[$i]->name;
					$uname=$data[$i]->username;
					$email=$data[$i]->email;
					$gender=$data[$i]->gender;
                    $dob=$data[$i]->dob;
					$phone=$data[$i]->phone;
					$address=$data[$i]->address;
					$city=$data[$i]->city;
					$salary=$data[$i]->salary;
					$joining=$data[$i]->jdate;
		
					echo "<tr>
					<td>$serial</td>
					<td>$id</td>
					<td>$ename</td>
					<td>$uname</td>
					<td>$email</td>
					<td>$gender</td>
					<td>$dob</td>
					<td>$phone</td>
					<td>$address</td>
					<td>$city</td>
					<td>$salary</td>
					<td>$joining</td>
					<td><button type='button'><a href='edit_employee.php'>Edit</a></button> <button type='button'>Delete</button></td>
					</tr>";		
				}
			?>					
			    </table>
			</form>
	</body>
</html>