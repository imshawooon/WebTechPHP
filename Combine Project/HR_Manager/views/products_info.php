<?php
    session_start();
    if(!isset($_SESSION["username"])){
		header("Location: hrlogin.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
	   <title>Product Information</title>
	</head>
	<body>
			<form action="" method="post">
			    <h2 align="center"><font size="6">Products Information</font></h2>
				<br>
				<br>
				<table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
				    <tr>
						<td colspan="2" width="8%">
								<button type="button" onclick="document.location='create_products.php'">Add</button>
						</td>
						<td align="right"><input type="text" placeholder="Search.."></td>
					</tr>	
				</table>
				<br>
				<br>
				<table border="1" width="100%" cellpadding="15" cellspacing="0" align="center">
					<tr>	
						<td>Serial No.</td>
						<td>Product Id</td>
						<td>Product Name</td>
						<td>Product Type</td>
						<td>Price</td>
						<td>Description</td>
						<td>Action</td>
                    </tr>
                    <?php 
				$products = simplexml_load_file("product.xml");
				$data = $products->product;
				$serial="";
				$id="";
				$pname="";
				$ptype="";
				$price="";
				$description="";
				
				$i=0;
				for( ;$i<count($data);$i++)
				{
					$serial=$data[$i]->serial;
					$id=$data[$i]->pid;
					$pname=$data[$i]->pname;
					$ptype=$data[$i]->ptype;
					$price=$data[$i]->price;
					$description=$data[$i]->description;
		
					echo "<tr>
					<td>$serial</td>
					<td>$id</td>
					<td>$pname</td>
					<td>$ptype</td>
					<td>$price</td>
					<td>$description</td>
					<td><button type='button'><a href='edit_product.php'>Edit</a></button> <button type='button'>Delete</button></td>
					</tr>";		
				}
			?>					
			    </table>
			</form>
	</body>
</html>