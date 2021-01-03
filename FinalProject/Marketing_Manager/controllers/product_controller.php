<?php
	require_once 'models/db_connect.php';
	$pid="";
	$pname="";
	$pc = "";
	$price="";
	$padd_date ="";
	$pupdate_date ="";
	
	$has_error = false;
	if(isset($_POST["submit"])){
		
		if(!$hasError){
			
			$pid= $_POST["pid"];
			$pname= $_POST["pname"];
			$pc= $_POST["pc"];
			$price= $_POST["price"];
			$padd_date= $_POST["padd_date"];
			$pupdate_date= $_POST["pupdate_date"];
			

			addproduct($pid,$pname,$pc,$price,$padd_date,$pupdate_date);
			header("Location: product_info.php");
		}
	}
	

	if(isset($_POST["Edit"])){
		
		if(!$hasError){
			
			$pid= $_POST["pid"];
			$pname= $_POST["pname"];
			$pc= $_POST["pc"];
			$price= $_POST["price"];
			$padd_date= $_POST["padd_date"];
			$pupdate_date= $_POST["pupdate_date"];
			

			editemployee($pid,$pname,$pc,$price,$padd_date,$pupdate_date);
			header("Location: product_info.php");
		}
	}
	

	function addproduct($pid,$pname,$pc,$price,$padd_date,$pupdate_date)
	{
		
		$query= "INSERT INTO products VALUES ('$pid','$pname','$pc','$price','$padd_date','$pupdate_date')";
		execute($query);	
	}

	function getallproduct()
	{
		
		$query="select * from products";
		$result=get($query);
		return $result;
	}

	function productsearch($pname){
        $query="SELECT pid,pname FROM products WHERE pname LIKE '%$pname%'";
        $result=get($query);
        return $result;
    }
	
	
	function editproduct($pid,$pname,$pc,$price,$padd_date,$pupdate_date){
        $query="UPDATE products SET pname='$pname',pc='$pc',price='$price',padd_date='$padd_date',pupdate_date='$pupdate_date' WHERE pid='$pid'";
        execute($query);
    }
    

    function deleteproduct($pid)
	{
		$query="DELETE FROM products WHERE pid='$pid'";
		execute($query);
	}
	
?>