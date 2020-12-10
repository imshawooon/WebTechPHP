<?php
	require_once 'models/db_connect.php';
	
	$hasError=false;
	if(isset($_POST["submit"])){
		
		if(!$hasError){
			
			$id= $_POST["id"];
			$name= $_POST["name"];
			$dob= $_POST["dob"];
			$credit= $_POST["credit"];
			$cgpa= $_POST["cgpa"];
			$deptid= $_POST["deptid"];

			addUser($id,$name,$dob,$credit,$cgpa,$deptid);
			header("Location: dashboard.php");
		}
	}
	
	function addUser($id,$name,$dob,$credit,$cgpa,$deptid)
	{
		
		$query= "INSERT INTO students VALUES ('$id','$name','$dob','$credit','$cgpa','$deptid')";
		execute($query);	
	}
	
	
?>

<html>
	<head>
		<title>Add Student</title>
	</head>
	<body>
		
		<h1>Welcome to Add Student</h1>
		<form method="post" onsubmit="return validate()" action="">
			
				<table>
					
					<tr>
						<td align="left">ID:</td>
						<td><input type="text" id="id" name="id"><span id="err_id"></span></td>
					</tr>
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
						<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
					</tr>
				</table>
			
		</form>

		<script src="js/addstudents.js">
			
		</script>
	</body>
	
</html>