
<?php 

	require_once "php_validation/editEmployee_validation.php";
	require_once "controllers/employee_controller.php";

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
		<title>Edit Employee Info</title>
	</head>
	<body>
		
		<h1 align="left">Edit Employee Info</h1>
		<form action="" onsubmit="return validate()" method="post">
			
				<table>

				
				<tr>
					<td align="left"><b>Employee Name*</b></td>
					<td><input type="text" value="<?php echo $ename ?>" id="ename" name="ename">
						<span><?php echo $err_ename; ?></span>
						<span id="err_ename"></span>
					</td>
				</tr>
				<tr>
					<td align="left"><b>Email*</b></td>
					<td><input type="text" value="<?php echo $email; ?>" id="email" name="email">
						<span><?php echo $err_email; ?></span>
						<span id="err_email"></span>
					</td>
				</tr>
				
				<tr>
						<td align="left"><b>Gender*</b></td>
						<td>
							<input type="radio" name="gender" id="gender" value="Male"> Male
							<input type="radio" name="gender" id="gender" value="Female"> Female   <?php echo " ".$err_gender; ?>
							<span id="err_gender"></span>
						</td>
					</tr>

				<tr>
						<td align="left"><b>Birth Date*</b></td>
						<td>
							<input type="text"  value="<?php echo $birth_date; ?>" id="birth_date" name="birth_date">
							<span><?php echo $err_birth_date; ?></span>
							<span id="err_birth_date"></span>
						</td>
					</tr>
				<tr>
					<td align="left"><b>Phone*</b></td>
					<td><input type="text" value="<?php echo $phone ?>" id="phone" name="phone">
						<span><?php echo $err_phone; ?></span>
						<span id="err_phone"></span>
					</td>
				</tr>
				
				<tr>
					<td align="left"><b>Salary</b></td>
					<td><input type="text" value="<?php echo $salary ?>" id="salary" name="salary">
						<span><?php echo $err_salary; ?></span>
						<span id="err_salary"></span>
					</td>
				</tr>

				<tr>
						<td align="left"><b>Address*</b></td>
						<td>
							<input type="text"  value="<?php echo $address; ?>"  id="address" name="address">
							<span><?php echo $err_address; ?></span>
							<span id="err_address"></span>
						</td>
				</tr>
				<tr>
						<td align="left"><b>Joining Date*</b></td>
						<td>
							<input type="text"  value="<?php echo $join_date; ?>" id="join_date" name="join_date">
							<span><?php echo $err_join_date; ?></span>
							<span id="err_join_date"></span>
						</td>
					</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="Edit" value="Edit">
					</td>
				</tr>
				</table>
			
		</form>
		<script src="js/editemployee.js">
			
		</script>
		
	</body>
	
</html>