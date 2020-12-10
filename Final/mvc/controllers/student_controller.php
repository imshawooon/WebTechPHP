<?php
	require_once 'models/db_connect.php';
	$id="";
	$name= "";
	$dob= "";
	$credit= "";
	$cgpa= "";
	$deptid= "";
	$hasError=false;
	if(isset($_POST["submit"])){
		
		if(!$hasError){
			
			$id= $_POST["id"];
			$name= $_POST["name"];
			$dob= $_POST["dob"];
			$credit= $_POST["credit"];
			$cgpa= $_POST["cgpa"];
			$deptid= $_POST["deptid"];

			addstudent($id,$name,$dob,$credit,$cgpa,$deptid);
			header("Location: dashboard.php");
		}
	}
	

	if(isset($_POST["Edit"])){
		
		if(!$hasError){
			
			$id= $_GET["id"];
			$name= $_POST["name"];
			$dob= $_POST["dob"];
			$credit= $_POST["credit"];
			$cgpa= $_POST["cgpa"];
			$deptid= $_POST["deptid"];

			editstudent($id,$name,$dob,$credit,$cgpa,$deptid);
			header("Location: dashboard.php");
		}
	}

	function addstudent($id,$name,$dob,$credit,$cgpa,$deptid)
	{
		
		$query= "INSERT INTO students VALUES ('$id','$name','$dob','$credit','$cgpa','$deptid')";
		execute($query);	
	}

	function getallstudent()
	{
		
		$query="select * from students";
		$result=get($query);
		return $result;
	}
	
	function editstudent($id,$name,$dob,$credit,$cgpa,$deptid){
        $query="UPDATE students SET name='$name',dob='$dob',credit='$credit',cgpa='$cgpa' WHERE id='$id'";
        execute($query);
    }

    function deletestudent($id)
	{
		$query="DELETE FROM students WHERE id='$id'";
		execute($query);
	}
	
?>