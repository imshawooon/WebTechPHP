<?php 
	require_once 'models/db_connect.php';
	
		$query="select * from users";
		$result=get($query);
		
?>


<html>
	<title></title>
	<head></head>
	<body>
		<h1>All User Data</h1>
		<form>
			<table border="1">
				<tr>
					<th>Name</th>
					<th>Username</th>
					<th>Email</th>
					<th>Phone</th>
				</tr>
				<?php 
					foreach($result as $u)
					{
						
						echo "<tr>";
							echo "<td>".$u["Name"]."</td>";
							echo "<td>".$u["Username"]."</td>";
							echo "<td>".$u["Email"]."</td>";
							echo "<td>".$u["Phone"]."</td>";
							
						echo "</tr>";
					}
				?>
			</table>
		</form>
	</body>
</html>