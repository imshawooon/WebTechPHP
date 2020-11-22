<?php
    session_start();
    if(isset($_SESSION["username"])){
		header("Location: customer_dashboard.php");
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
			$xml = simplexml_load_file("customer.xml");
			$customers = $xml->customer;
			$flag=false;
			foreach($customers as $customer)
			{
                if($customer->username==$username && $customer->password==$pass)
				{   
					$flag=true;
					session_start();
					$_SESSION["username"] = $username;
                }
			}
			
			if($flag)
			{
				header("Location: customer_dashboard.php");
			}
			else
			{
			     echo "Invalid Credentials!";
                
			}
		}
	}
	
?>