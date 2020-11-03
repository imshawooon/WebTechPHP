<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	$fileexist=false;

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
			
		}
		if(!$fileexist){
			$users = simplexml_load_file("data.xml");
			
			if($pass == $users->password && $uname ==$users->password){
        		echo "Everything is alright";
        		
        		header("Location: dashboard.php");
					
    		} 

    		else {
                echo "wrong username or password";
            }
			 
		}
	}
	
?>