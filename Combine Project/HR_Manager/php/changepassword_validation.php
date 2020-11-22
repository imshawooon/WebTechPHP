<?php 
    $cpass="";
    $err_cpass="";
    $npass="";
    $err_npass="";
	$cnpass="";
    $err_cnpass="";
	$change="";

    $has_err=false;
    if(isset($_POST["update"])){
		
        if(!empty($_POST["cpass"]))
		{
			if(strlen($_POST["cpass"]) >= 8)
			{
				if(!(strtolower($_POST["cpass"]) == $_POST["cpass"]) && (!(strtoupper($_POST["cpass"]) == $_POST["cpass"])))
				{
					$hasNumber = false;
					$num_arr = array("0","1","2","3","4","5","6","7","8","9");
					$password =htmlspecialchars($_POST["cpass"]);
					for($i = 0; $i < strlen($password); $i++)
					{
						for($j = 0; $j <10; $j++)
						{
							if($password[$i]== $num_arr[$j])
							{
								$hasNumber = true;
								break;
							}
						}
					}
					if($hasNumber == true)
					{
						if(strpos($_POST["cpass"], "#") || strpos($_POST["cpass"], "?"))
						{
							$cpass = htmlspecialchars($_POST["cpass"]);
						}
						else{$err_cpass = "*atleast one special character # or ? is required";}
					}
					else{$err_cpass = "*atleast one digit is required";}
				}
				else{$err_cpass = "*upper and lower case character required";}
			}
			else{$err_cpass = "*minimum password length is 8";}
		}
		else{$err_cpass = "Password Required";
		     $has_err=true;  
			}
         if(!empty($_POST["npass"]))
		{
			if(strlen($_POST["npass"]) >= 8)
			{
				if(!(strtolower($_POST["npass"]) == $_POST["npass"]) && (!(strtoupper($_POST["npass"]) == $_POST["npass"])))
				{
					$hasNumber = false;
					$num_arr = array("0","1","2","3","4","5","6","7","8","9");
					$npassword =htmlspecialchars($_POST["npass"]);
					for($i = 0; $i < strlen($npassword); $i++)
					{
						for($j = 0; $j <10; $j++)
						{
							if($npassword[$i]== $num_arr[$j])
							{
								$hasNumber = true;
								break;
							}
						}
					}
					if($hasNumber == true)
					{
						if(strpos($_POST["npass"], "#") || strpos($_POST["npass"], "?"))
						{
							$npass = htmlspecialchars($_POST["npass"]);
						}
						else{$err_npass = "*atleast one special character # or ? is required";}
					}
					else{$err_npass = "*atleast one digit is required";}
				}
				else{$err_npass = "*upper and lower case character required";}
			}
			else{$err_npass = "*minimum password length is 8";}
		}
		else{$err_npass = "Password Required";
		     $has_err=true;
		    }
		if($_POST["npass"]!=htmlspecialchars($_POST["cnpass"]))
		{
			$err_cnpass = "Password not matched";
			$has_err=true;
		}
	    if(!$has_err){
			$change= "password updated";
		}
	}
	
?>