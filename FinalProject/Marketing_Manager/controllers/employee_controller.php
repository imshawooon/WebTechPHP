<?php
	require_once 'models/db_connect.php';
	$eid="";
	$ename="";
	$email = "";
	$gender="";
	$birth_date ="";
	$phone = "";
	$salary = "";
	$address = "";
	$join_date ="";
	
	$has_error = false;
	if(isset($_POST["submit"])){
		
		if(!$hasError){
			
			$eid= $_POST["eid"];
			$ename= $_POST["ename"];
			$email= $_POST["email"];
			$gender= $_POST["gender"];
			$birth_date= $_POST["birth_date"];
			$phone= $_POST["phone"];
			$salary= $_POST["salary"];
			$address= $_POST["address"];
			$join_date= $_POST["join_date"];
			

			addemployee($eid,$ename,$email,$gender,$birth_date,$phone,$salary,$address,$join_date);
			header("Location: Employee_info.php");
		}
	}
	

	if(isset($_POST["Edit"])){
		
		if(!$hasError){
			
			$eid= $_GET["eid"];
			$ename= $_POST["ename"];
			$email= $_POST["email"];
			

			editemployee($eid,$ename,$email);
			header("Location: Employee_info.php");
		}
	}
	

	function addemployee($eid,$ename,$email,$gender,$birth_date,$phone,$salary,$address,$join_date)
	{
		
		$query= "INSERT INTO employees VALUES ('$eid','$ename','$email','$gender','$birth_date','$phone','$salary','$address','$join_date')";
		execute($query);	
	}

	function getallemployee()
	{
		
		$query="select * from employees";
		$result=get($query);
		return $result;
	}
	
	
	function editemployee($eid,$ename,$email){
        $query="UPDATE employees SET ename='$ename',email='$email' WHERE eid='$eid'";
        execute($query);
    }
    

    function deleteemployee($eid)
	{
		$query="DELETE FROM employees WHERE eid='$eid'";
		execute($query);
	}
	
?>