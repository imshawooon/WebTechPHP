<?php
	
	
	$pid="";
	$err_pid="";
	$pname="";
	$err_pname="";
	$pc="";
	$err_pc="";
	$price="";
	$err_price="";
	$padd_date ="";
	$err_padd_date ="";
	$pupdate_date ="";
	$err_pupdate_date ="";
	
	$has_error = false;
	
	if(isset($_POST["submit"])){
		if(empty($_POST["pid"])){
			$err_pid=" *Product ID Required";
			$has_error = true;
		}
		else{
			$pid=htmlspecialchars($_POST["pid"]);
		}

		if(empty($_POST["pname"])){
			$err_pname=" *Product name required";
			$hasError = true;
		}
		else{
			$ename=htmlspecialchars($_POST["pname"]);
		}


		if(empty($_POST["pc"])){
			$err_pc=" *Category required";
			$hasError = true;
		}
		else{
			$pc=htmlspecialchars($_POST["pc"]);
		}

		if(empty($_POST["price"])){
			$err_price=" *Price required";
			$hasError = true;
		}
		else{
			$price=htmlspecialchars($_POST["price"]);
		}
		
		if(isset($_POST["padd_date"]))
		{
			$padd_date = $_POST["padd_date"];
		}
		else{$err_padd_date = "*Day, Month, Year required";}
		
		

		if(isset($_POST["pupdate_date"]))
		{
			$pupdate_date = $_POST["pupdate_date"];
		}
		else{$err_pupdate_date = "*Day, Month, Year required";}
		
	
		
		if(!$has_error){
			
			header("Location: product_info.php");
		}
	}
	
?>