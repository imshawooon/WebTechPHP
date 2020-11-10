<html>
	<head>
		<title>Dashboard</title>
	</head>
	<body>
		
		<h1>Book Store</h1>
			
				<table border="1">
					<tr>
						<td colspan="7" align="left"><a href="addbook.php">Add New Book</a></td>
					</tr>
					<tr>
						<td><u>SR. NO</u></td>
						<td><u>NAME</u></td>
						<td><u>PUBLISHER</u></td>
						<td><u>ISBN</u></td>
						<td><u>PRICE</u></td>
						<td><u>IMAGE</u></td>
						<td><u>DELETE</u></td>
					</tr>
					<?php

					$books = simplexml_load_file("book.xml");
			
					$data = $books->book;

					$bname="";
					$pname="";
					$isbn="";
					$price="";
			
					$i=0;
					for( ;$i<count($data);$i++)
					{
				
						$bname=$data[$i]->bname;
						$pname=$data[$i]->pname;
						$isbn=$data[$i]->isbn;
						$price=$data[$i]->price;

						echo "<tr>

						<td>$bname</td>
						<td>$pname</td>
						<td>$isbn</td>
						<td>$price</td>

						</tr>";
					
					}

					?>
					
				</table>
			
	</body>
	
</html>