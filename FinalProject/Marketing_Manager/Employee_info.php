<?php 
	$uname="";
	if(!isset($_COOKIE["username"])){
		header("Location: loginMM.php");
	}
?>

<?php 
	require_once 'controllers/employee_controller.php';
	$allemployee=getallemployee();
?>

<html>
	<head>

		<style>
table, td {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>

		<title>Employee Info</title>
	</head>
	<body>
		
		<h1 align="center">Employee Info</h1>
		
		<b><a href="addEmployee.php">Add New Employee</a></b>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


		<b><input type="text" align="right" name="search" placeholder="Search Here">
		<a href="search.php"><button>Search</button></a></b>	

			<br>
			<br>

				<table border="1" align="center">
					
					<tr>
						<td><b>Employee ID</b></td>
						<td><b>Employee Name</b></td>
						<td><b>Email</b></td>
						<td><b>Gender</b></td>
						<td><b>Birth Date</b></td>
						<td><b>Phone</b></td>
						<td><b>Salary</b></td>
						<td><b>Address</b></td>
						<td><b>Join Date</b></td>
						<td><b>Edit</b></td>
						<td><b>Delete</b></td>
					</tr>

					<?php 
					foreach($allemployee as $emp)
					{
						
						echo "<tr>";
							echo "<td>".$emp["eid"]."</td>";
							echo "<td>".$emp["ename"]."</td>";
							echo "<td>".$emp["email"]."</td>";
							echo "<td>".$emp["gender"]."</td>";
							echo "<td>".$emp["birth_date"]."</td>";
							echo "<td>".$emp["phone"]."</td>";
							echo "<td>".$emp["salary"]."</td>";
							echo "<td>".$emp["address"]."</td>";
							echo "<td>".$emp["join_date"]."</td>";
							echo "<td><a href=editemployee.php?id=".$emp["eid"].">Edit</a></td>";
							echo "<td><a href=deleteemployee.php?id=".$emp["eid"].">Delete</a></td>";
							
						echo "</tr>";
					}
				?>
					
					
					
				</table>
			
	</body>
	
</html>