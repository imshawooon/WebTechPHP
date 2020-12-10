<?php 
	require_once 'models/db_connect.php';
	
		$query="select * from students";
		$result=get($query);
		
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
					foreach($result as $student)
					{
						
						echo "<tr>";
							echo "<td>".$student["id"]."</td>";
							echo "<td>".$student["name"]."</td>";
							echo "<td>".$student["dob"]."</td>";
							echo "<td>".$student["credit"]."</td>";
							echo "<td>".$student["cgpa"]."</td>";
							echo "<td>".$student["dept_id"]."</td>";
							
						echo "</tr>";
					}
				?>
			</table>
		</form>
	</body>
</html>