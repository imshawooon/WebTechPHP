<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	if(isset($_POST["login"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		
		if(!$hasError){
			$users = simplexml_load_file("data.xml");
			
			$data = $users->user;
			
			$i=0;
			for( ;$i<3;$i++)
			{
				
				if($data[$i]->username == $uname && $data[$i]->password == $pass)
				{
					header("Location: dashboard.php");
					break;
				}
					
			}
			if($i>2)
			{
				echo "Invalid username or password";
			}
			
		}
	}