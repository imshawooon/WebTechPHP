<?php 
	$uname="";
	if(!isset($_COOKIE["username"])){
		header("Location: loginMM.php");
	}
?>

<?php 
	require_once 'controllers/product_controller.php';
	$allproduct=getallproduct();
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
		<title>Product Info</title>
	</head>
	<body>
		
		<h1 align="center">Product Info</h1>

		<b><a href="addProduct.php">Add Product</a></b>
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


		<b><input type="text" align="right" name="search" onkeyup="livesearch(this)" placeholder="Search Here">
		<div id="psuggestion"></div>

			<br>
		<br>
			
				<table border="1" align="center">
					
					<tr>
						<td><b>Product ID</b></td>
						<td><b>Product Name</b></td>
						<td><b>Product Category</b></td>
						<td><b>Unit Price</b></td>
						<td><b>Adding Date</b></td>
						<td><b>Updating Date</b></td>
						<td><b>Edit</b></td>
						<td><b>Delete</b></td>
					</tr>
					
					<?php 
					foreach($allproduct as $product)
					{
						
						echo "<tr>";
							echo "<td>".$product["pid"]."</td>";
							echo "<td>".$product["pname"]."</td>";
							echo "<td>".$product["pc"]."</td>";
							echo "<td>".$product["price"]."</td>";
							echo "<td>".$product["padd_date"]."</td>";
							echo "<td>".$product["pupdate_date"]."</td>";
							echo "<td><a href=editproduct.php?id=".$product["pid"].">Edit</a></td>";
							echo "<td><a href=deleteproduct.php?id=".$product["pid"].">Delete</a></td>";
							
						echo "</tr>";
					}
				?>
					
				</table>
				<script>
					function livesearch(textBox)
					{
						var xhr = new XMLHttpRequest();
						
						xhr.onreadystatechange=function()
							{
								if (this.readyState==4 && this.status==200) 
								{
			
									document.getElementById("psuggestion").innerHTML=this.responseText;
								}
							}
							xhr.open("GET","searchproduct.php?name="+textBox.value,true);
							xhr.send();

					}
				</script>
			
	</body>
	
</html>