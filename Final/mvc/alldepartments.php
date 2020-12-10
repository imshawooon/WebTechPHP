<?php 
	require_once 'controllers/department_controller.php';
	$alldepartment=getalldepartment();	
?>


<html>
	<title></title>
	<head></head>
	<body>
		<h1>All Department Info</h1>
		<form>
			<table border="1">
				<tr>
					<th>Department ID</th>
					<th>Department Name</th>
				</tr>
				<?php 
					foreach($alldepartment as $department)
					{
						
						echo "<tr>";
							echo "<td>".$department["did"]."</td>";
							echo "<td>".$department["dname"]."</td>";
						echo "</tr>";
					}
				?>
			</table>
		</form>
	</body>
</html>