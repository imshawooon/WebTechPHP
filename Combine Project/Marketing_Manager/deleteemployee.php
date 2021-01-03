<?php 
	require_once 'controllers/employee_controller.php';
	deleteemployee($_GET["eid"]);
	header("Location: Employee_info.php");

?>