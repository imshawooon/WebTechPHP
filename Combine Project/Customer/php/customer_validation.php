<?php	
    $name="";
    $err_name="";
	$username="";
	$err_username="";
    $pass="";
    $err_pass="";
    $cpass="";
    $err_cpass="";
    $email="";
    $err_email="";
	$gender="";
    $err_gender="";
    $phone="";
    $err_phone="";
	$address="";
    $err_address="";
	$city="";
	$err_city="";
    $has_err=false;
	
    if(isset($_POST["register"])){
		
        if(empty($_POST["name"])){
            $err_name="Name Required";
            $has_err=true;
        }
        else{
            $name=htmlspecialchars($_POST["name"]);
        }

        if(empty($_POST["username"])){
			$err_username="Username Required";
			$has_err=true;
		}
		elseif((strlen($_POST["username"])<6)){
            $err_username="Username must contain at least 6 characters";
            $has_err=true;
        }
		elseif(strpos($_POST["username"]," "))
		{
			$err_username = "No space is allowed";
			$has_err=true;
		}
		else{
		    $username=htmlspecialchars($_POST["username"]);
		}
     
        if(!empty($_POST["pass"]))
		{
			if(strlen($_POST["pass"]) >= 8)
			{
				if(!(strtolower($_POST["pass"]) == $_POST["pass"]) && (!(strtoupper($_POST["pass"]) == $_POST["pass"])))
				{
					$hasNumber = false;
					$num_arr = array("0","1","2","3","4","5","6","7","8","9");
					$password =htmlspecialchars($_POST["pass"]);
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
						if(strpos($_POST["pass"], "#") || strpos($_POST["pass"], "?"))
						{
							$pass = htmlspecialchars($_POST["pass"]);
						}
						else{$err_pass = "*atleast one special character # or ? is required";}
					}
					else{$err_pass = "*atleast one digit is required";}
				}
				else{$err_pass = "*upper and lower case character required";}
			}
			else{$err_pass = "*minimum password length is 8";}
		}
		else{$err_pass = "Password Required";}
        if(empty($_POST["cpass"])){
            $err_cpass="Confirm Password Required";
            $has_err=true;
        }
		elseif($_POST["pass"]!=htmlspecialchars($_POST["cpass"]))
		{
			$err_cpass = "Password not matched";
			$has_err=true;
		}
		else{
            $cpass=htmlspecialchars($_POST["cpass"]);
        }
        if(empty($_POST["email"]))
		{
			$err_email = "Email Required";
			$has_err=true;
		}
		else if(strpos($_POST["email"],"@"))
		{
			$flag = false;
			$pos = strpos($_POST["email"],"@");
			$str = $_POST["email"];
			for($i = $pos; $i < strlen($str); $i++)
			{
				if($str[$i] == "."){$flag = true;break;}
			}
			if($flag == true){$email = htmlspecialchars($_POST["email"]);}
			else{$err_email = "*invalid email pattern";}
		}
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required.";
			$has_err=true;
        }
        else{
            $gender=htmlspecialchars($_POST["gender"]);
        }
        if(empty($_POST["phone"]))
		{
			$err_phone = "Phone no. Required";
			$has_err=true;
		}
		else if(!is_numeric($_POST["phone"]))
		{
			$err_phone = "Numeric charecter required";
			$has_err=true;
		}
		else{ $phone = htmlspecialchars($_POST["phone"]);
		}
		if(empty($_POST["address"])){
            $err_address="Address Required";
            $has_err=true;
        }
        else{
            $address=htmlspecialchars($_POST["address"]);
        }
		if(isset($_POST["city"])){
            $city=htmlspecialchars($_POST["city"]);
        }
        else{
            $err_city="Please Select city";
            $has_err=true;
        }
	    if(!$has_err){
			$customers = simplexml_load_file("customer.xml");
			$a= $customers->customer;
			$customer = $customers->addChild("customer");

			$customer->addChild("name",$name);
			$customer->addChild("username",$username);
			$customer->addChild("password",$pass);
			$customer->addChild("email",$email);
			$customer->addChild("gender",$gender);
			$customer->addChild("phone",$phone);
			$customer->addChild("address",$address);
			$customer->addChild("city",$city);

			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($customers->asXML());
			
			
			$file = fopen("customer.xml","w");
			fwrite($file,$xml->saveXML());
			//header("Location: employee_info.php");
		}
	}
	
?>