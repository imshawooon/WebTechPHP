<?php
	

	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$phone_no = "";
	$err_phone = "";	
	$gender="";
	$err_gender="";
	
	$has_error = false;
	
	if(isset($_POST["ok"])){
		if(empty($_POST["name"])){
			$err_name=" *Name Required";
			$has_error = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}

		if(empty($_POST["uname"])){
			$err_username=" *Username required";
			$hasError = true;
		}
		elseif(strlen($_POST["uname"]) < 6){
			$err_username="*Username must be 6 characters long";
			$hasError = true;
		}
		else{
			$username=$_POST["uname"];
		}

		if(empty($_POST["pass"])){
			$err_password=" *Password required";
			$hasError = true;
		}
		elseif(strlen($_POST["pass"]) < 8){
			$err_password=" *Password must be 8 characters long";
			$hasError = true;
		}
		else{
			$password=$_POST["pass"];
		}

		
		if(empty($_POST["number"]))
		{
			$err_phone = " *Number required ";
		}
		else if(!is_numeric($_POST["number"]))
		{
			$err_phone = " *Numeric charecter required ";
		}
		else{ $phone_no = htmlspecialchars($_POST["number"]);}

		

		if(!isset($_POST["gender"])){
			$err_gender="  *Gender Required";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		
		if(!$has_error){
			$users = simplexml_load_file("data.xml");
			
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
			fwrite($file,$xml->saveXML());
		}
	}
	
?>