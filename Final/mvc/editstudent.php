<?php
	require_once 'controllers/student_controller.php';
	
?>

<html>
	<head>
		<title>Edit Student</title>
	</head>
	<body>
		
		<h1>Welcome to Edit Student</h1>
		<form method="post" onsubmit="return validate()" action="">
			
				<table>
					
					<tr>
						<td align="left">Name:</td>
						<td><input type="text" id="name"  name="name"><span id="err_name"></span></td>
					</tr>
					
					<tr>
						<td align="left">DOB:</td>
						<td><input type="text" id="dob"  name="dob"><span id="err_dob"></span></td>
					</tr>
					
					<tr>
						<td align="left">Credit:</td>
						<td><input type="text" id="credit" name="credit"><span id="err_credit"></span></td>
					</tr>
					
					<tr>
						<td align="left">Cgpa:</td>
						<td><input type="text" id="cgpa" name="cgpa"><span id="err_cgpa"></span></td>
					</tr>

					<tr>
						<td align="left">Dept ID:</td>
						<td><input type="text" id="deptid" name="deptid"><span id="err_deptid"></span></td>
					</tr>
					
					<tr>
						<td colspan="2" align="center"><input type="submit" name="Edit" value="Edit"></td>
					</tr>
				</table>
			
		</form>

		<script src="js/editstudents.js">
			
		</script>
	</body>
	
</html>