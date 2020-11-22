<?php
    session_start();
    if(isset($_SESSION["username"])){
		header("Location: hr_dashboard.php");
	}
	$username="";
	$err_username="";
	$pass="";
	$err_pass="";
	$hasError=false;
	if(isset($_POST["login"])){
		if(empty($_POST["username"])){
			$err_username="Username Required";
			$hasError =true;	
		}
		else{
			$username = htmlspecialchars($_POST["username"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
        }
		
		if(!$hasError)
		{
			$xml = simplexml_load_file("hrdata.xml");
			$hrs = $xml->hr;
			$flag=false;
			foreach($hrs as $hr)
			{
                if($hr->username==$username && $hr->password==$pass)
				{   
					$flag=true;
					session_start();
					$_SESSION["username"] = $username;
                }
			}
			
			if($flag)
			{
				header("Location: hr_dashboard.php");
			}
			else
			{
			     echo "Invalid Credentials!";
                
			}
		}
	}
	
?>