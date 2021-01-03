<?php 
	$uname="";
	if(!isset($_COOKIE["username"])){
		header("Location: loginMM.php");
	}
?>

<?php 
	include_once "php_validation/addProduct_validation.php";
	require_once "controllers/product_controller.php";

?>

<html>
	<head>
		<style>
table, td {
  padding: 10px;
  background: #F2F2F2;
  width: 25%;

}


</style>
		<title>Add Product</title>
	</head>
	<body>
		
		<h1>Add Product</h1>
		<form action="" onsubmit="return validate()" method="post">
			
				<table>

				<tr>
					<td align="right"><b>Product ID</b></td>
					<td><input type="text" value="<?php echo $pid ?>" name="pid" id="pid"><span><?php echo $err_pid; ?></span><span id="err_pid"></span></td>
				</tr>	
				<tr>
					<td align="right"><b>Product Name*</b></td>
					<td><input type="text" value="<?php echo $pname ?>" name="pname" id="pname">
						<span><?php echo $err_pname; ?></span><span id="err_pname"></span>
					</td>
				</tr>

				<tr>
					<td align="right"><b>Product Category*</b></td>
					<td><input type="text" value="<?php echo $pc ?>" name="pc" id="pc"><span><?php echo $err_pc; ?></span><span id="err_pc"></span></td>
				</tr>
				
				<tr>
					<td align="right"><b>Unit Price*</b></td>
					<td><input type="text" value="<?php echo $price ?>" name="price" id="price"><span><?php echo $err_price; ?></span><span id="err_price"></span></td>
				</tr>
				
				<tr>
					<td align="right"><b>Adding date*</b></td>
					<td>
							<input type="text"  value="<?php echo $padd_date; ?>" name="padd_date" id="padd_date"><span><?php echo $err_padd_date; ?></span>
							<span id="err_padd_date"></span>
						</td>
					</tr>
				<tr>
					<td align="right"><b>Updating date*</b></td>
					<td>
							<input type="text"  value="<?php echo $pupdate_date; ?>" name="pupdate_date" id="pupdate_date"><span><?php echo $err_pupdate_date; ?></span>
							<span id="err_pupdate_date"></span>
						</td>
					</tr>

				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
				</tr>
				</table>
			
		</form>
		<script src="js/addproduct.js">
			
		</script>
	</body>
	
</html>