<?php
	require_once 'controllers/employee_controller.php';
	
?>

<html>
	<head>
		<title>Edit Employee</title>
	</head>
	<body>
		
		<h1>Welcome to Edit Employee</h1>
		<form method="post" onsubmit="return validate()" action="">
			
				<table>

				<tr>
					<td align="left"><b>Employee Name*</b></td>
					<td><input type="text"  name="ename" id="ename"><span id="err_ename"></span></td>
				</tr>
				<tr>
					<td align="left"><b>Email*</b></td>
					<td><input type="text"  name="email" id="email"><span id="err_email"></span></td>
				</tr>
				
				<tr>
						<td align="left"><b>Gender*</b></td>
						<td>
							<input type="radio" name="gender" id="gender" value="Male"> Male
							<input type="radio" name="gender" id="gender" value="Female"> Female   
						</td>
					</tr>

				<tr>
						<td align="left"><b>Birth Date*</b></td>
						<td>
							<input type="text" name="birth_date" id="birth_date" >
							<span id="err_birth_date"></span>
						</td>
					</tr>
				<tr>
					<td align="left"><b>Phone*</b></td>
					<td><input type="text" name="phone" id="phone"><span id="err_phone"></span></td>
				</tr>
				
				<tr>
					<td align="left"><b>Salary</b></td>
					<td><input type="text" name="salary" id="salary"><span id="err_salary"></span></td>
				</tr>

				<tr>
						<td align="left"><b>Address*</b></td>
						<td>
							<input type="text" name="address" id="address">
							<span id="err_address"></span>
						</td>
				</tr>
				<tr>
						<td align="left"><b>Joining Date*</b></td>
						<td>
							<input type="text" name="join_date" id="join_date">
							<span id="err_join_date"></span>
						</td>
					</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="Edit" value="Edit"></td>
				</tr>
				</table>
			
		</form>
		
	</body>
	
</html>