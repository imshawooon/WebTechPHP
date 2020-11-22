<?php include_once "../php/product_validation.php";

    session_start();
    if(!isset($_SESSION["username"])){
		header("Location: hrlogin.php");
	}

?>
<!DOCTYPE html>
<html>
	<head>
	    <title>Product Create</title>
	</head>
	<body>
			<form action="" method="post">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
				    <tr>
						<!--<td>&nbsp;</td>-->
						<td align="center"><font size="6">Create Products</font></td>
					</tr>
				</table>
				<br>
				<br>
			    <table border="0" width="40%" cellpadding="10" cellspacing="0" align="center">
				  <tr>
					  <td align="center" style="color:red;">* Fields are required</td>
				  </tr>
				  <tr>
					  <td><font size="4">Product Id:</font></td>
					  <td><input type="text" value="<?php echo $pid?>" name="pid"></td>
					  <td><span style="color:red;">*<?php echo $err_pid;?></span></td>
				  </tr>
				  <tr>
					  <td><font size="4">Product Name:</font></td>
					  <td><input type="text" value="<?php echo $pname?>" name="pname"></td>
					  <td><span style="color:red;">*<?php echo $err_pname;?></span></td>
				  </tr> 
				   <tr>
					  <td><font size="4">Price:</font></td>
					  <td><input type="text" value="<?php echo $price?>" name="price"></td>
					  <td><span style="color:red;">*<?php echo $err_price;?></span></td>
				  </tr>
				  <tr>
				      <td><font size="4">Product type:</font></td>
					  <td><select style="width:100px" name="ptype">
					         <option disabled selected>Product type</option>
							 <option>Medical Product</option>
							 <option>Industrial Product</option>
						  </select>
					  </td>
					  <td><span style="color:red;">*<?php echo $err_ptype;?></span></td>
                  </tr>
                  <tr>
					  <td><font size="4">Product Description:</font></td>
					  <td><textarea value="<?php echo $description?>" name="description" ></textarea></td>
					  <td><span style="color:red;">*<?php echo $err_description;?></span></td>
				  </tr>	
				  <tr>
					  <td colspan="2" align="center">
						  <button type="submit" name="create"><font size="4">Submit</font></button>
					  </td>		
                  </tr>				  
			    </table>

			</form>
	</body>
</html>