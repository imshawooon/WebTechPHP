<?php
	



	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$phone_no = "";
	$err_phone = "";	
	$gender="";
	$err_gender="";
	
	$has_error = false;
	
	if(isset($_POST["registration"])){
		
		if(empty($_POST["uname"])){
			$err_username=" *Username required";
			$hasError = true;
		}
		elseif(strlen($_POST["uname"]) < 6){
			$err_username="*Username must be 6 characters long";
			$hasError = true;
		}
		else{
			$uname=$_POST["uname"];
		}

		if(empty($_POST["pass"])){
			$err_password=" *Password required";
			$hasError = true;
		}
		elseif(strlen($_POST["pass"]) < 6){
			$err_pass=" *Password must be 6 characters long";
			$hasError = true;
		}
		else{
			$pass=$_POST["pass"];
		}

		
		if(empty($_POST["phone_no"]))
		{
			$err_phone = " *Number required ";
		}
		else if(!is_numeric($_POST["phone_no"]))
		{
			$err_phone = " *Numeric charecter required ";
		}
		else{ 
			$phone_no = $_POST["phone_no"];
		}

		

		if(!isset($_POST["gender"])){
			$err_gender="  *Gender Required";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		
		if(!$has_error){
			/*$users = simplexml_load_file("data.xml");
			
			$user = $users->addChild("user");
			$user->addChild("username",$username);
			$user->addChild("password",$password);
			$user->addChild("type","user");
			echo "<pre>";
			print_r($users);
			echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			
			$file = fopen("data.xml","w");
			fwrite($file,$xml->saveXML());*/

			$username="root";
			$servername="localhost";
			$password="";

			$db_name="db_reg";

			$conn = mysqli_connect($servername,$username,$password,$db_name);
			if (!$conn) {
				die("Connection failed :".mysqli_connect_error() );
			}
			mysqli_query($conn,"INSERT INTO users VALUES (null, '$uname', '$pass','$phone_no','$gender')");

		}
	}
	
?>