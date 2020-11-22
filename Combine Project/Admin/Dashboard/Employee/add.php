<?php
	if (isset($_POST['submit'])) {
		$employees = simplexml_load_file('employee.xml');
		$employee = $employees->addChild('employee');
		$employee->addChild('id', $_POST['id']);
		$employee->addChild('name', $_POST['name']);
		$employee->addChild('email', $_POST['email']);
		$employee->addChild('password', $_POST['password']);
		$employee->addChild('salary', $_POST['salary']);
		file_put_contents('employee.xml', $employees->asXML());
		header('location: duplicate.php');
	}
 ?>


<form method="POST">
	<table>
		<tr>
			<td>ID</td>
			<td><input type="text" name="id"></td>
		</tr>

		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="Email" name="email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="Password" name="password"></td>
		</tr>

		<tr>
			<td>Salary</td>
			<td><input type="text" name="salary"></td>
		</tr>

		<tr>
			<td>Submit</td>
			<td><input type="Submit" name="submit" value="save"></td>
		</tr>



	</table>
</form>