<?php include_once "addbook_validation.php" ;?>
<html>
	<head>
		<title>AddBook</title>
	</head>
	<body>
		
		<h1>Add Book</h1>
		<form action="" method="post">
			
				<table>
					<tr>
						<td align="left">Book Name:</td>
					</tr>
					<tr>
						<td><input type="text" value="<?php echo $bname?>" name="bname"><span><?php echo $err_bname;?></span></td>
					</tr>
					<tr>
						<td align="left">Category</td>
					</tr>
					<tr>
						<td>
							<select>
								<option>Engineering</option>
								<option>Architectuure</option>
								<option>Novel</option>
													
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Description</td>
					</tr>
					<tr>
						<td><textarea></textarea></td>
					</tr>
					<tr>
						<td align="left">Publisher:</td>
					</tr>
					<tr>
						<td><input type="text" value="<?php echo $pname?>" name="pname"><span><?php echo $err_pname;?></span></td>
					</tr>
					<tr>
						<td align="left">Edition:</td>
					</tr>
					<tr>
						<td><input type="text" name="edition"></td>
					</tr>
					<tr>
						<td align="left">ISBN:</td>
					</tr>
					<tr>
						<td><input type="text" value="<?php echo $isbn?>" name="isbn"><span><?php echo $err_isbn;?></span></td>
					</tr>
					<tr>
						<td align="left">Pages:</td>
					</tr>
					<tr>
						<td><input type="text" name="pages"></td>
					</tr>
					<tr>
						<td align="left">Price:</td>
					</tr>
					<tr>
						<td><input type="text" value="<?php echo $price?>" name="price"><span><?php echo $err_price;?></span></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="submit"></td>
					</tr>
				</table>
			
		</form>
	</body>
	
</html>