<?php 
	require_once 'controllers/student_controller.php';
	$allstudent=getallstudent();	
?>


<html>
	<title></title>
	<head></head>
	<body>
		<h1>All Student Data</h1>
		<form>
			<table border="1">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>DOB</th>
					<th>Credit</th>
					<th>CGPA</th>
					<th>Dept ID</th>
					<th>Edit Student</th>
					<th>Delete Student</th>
				</tr>
				<?php 
					foreach($allstudent as $student)
					{
						
						echo "<tr>";
							echo "<td>".$student["id"]."</td>";
							echo "<td>".$student["name"]."</td>";
							echo "<td>".$student["dob"]."</td>";
							echo "<td>".$student["credit"]."</td>";
							echo "<td>".$student["cgpa"]."</td>";
							echo "<td>".$student["dept_id"]."</td>";
							echo "<td><a href=editstudent.php?id=".$student["id"].">Edit</a></td>";
							echo "<td><a href=deletestudent.php?id=".$student["id"].">Delete</a></td>";
							
						echo "</tr>";
					}
				?>
			</table>
		</form>
	</body>
</html>