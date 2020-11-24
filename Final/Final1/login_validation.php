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
		
		if(!$hasError)
		{
			/*	
			$xml=simplexml_load_file("mmdata.xml");
			$users = $xml->user;
			$flag=false;
				foreach($users as $user)
				{
					if($user->username == $uname && $user->password== $pass)
					{
						$flag = true;
						
						setcookie("username",$uname,time() + 120);
					}
				}
				if($flag)
				{
					header("Location: Marketing_Manager.php");
				}
				else
				{
					echo "Invalid Username or Password";
				}
		}
		else
		{
			echo "Invalid Username or Password";
		}
		*/


		$username="root";
			$servername="localhost";
			$password="";

			$db_name="db_reg";

			$conn = mysqli_connect($servername,$username,$password,$db_name);

			$query="SELECT * FROM users WHERE Username = '$uname' AND Password = '$pass' ";
			$result=mysqli_query($conn,$query);

			if(mysqli_num_rows($result)>0)
			{
				header("Location: dashboard.php");
			}

			else
			{
				echo "Invalid username or password";
			}
		}
	}
		
?>