<?php

echo "Successfully login";

			$username="root";
			$servername="localhost";
			$password="";

			$db_name="db_reg";

			$conn = mysqli_connect($servername,$username,$password,$db_name);

			$query="SELECT * FROM users ";
			$result=mysqli_query($conn,$query);

			if (mysqli_num_rows($result)>0) {
				echo '<table border="1">';
				echo "<tr>";
				echo "<th>Username</th>";
				echo "<th>Phone</th>";
				echo "<th>Gender</th>";
				echo "</tr>";

				while ($row=mysqli_fetch_assoc($result)) {
					echo "<tr>";
				echo "<td>".$row["Username"]."</td>";
				echo "<td>".$row["Password"]."</td>";
				echo "<td>".$row["Gender"]."</td>";
				echo "</tr>";

				}

				echo "</table>";



			}




?>