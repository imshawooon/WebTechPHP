<?php 
	require_once 'controllers/student_controller.php';
	deletestudent($_GET["id"]);
	header("Location: allstudents.php");

?>