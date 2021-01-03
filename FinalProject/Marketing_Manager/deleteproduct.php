<?php 
	require_once 'controllers/product_controller.php';
	deleteproduct($_GET["pid"]);
	header("Location: product_info.php");

?>