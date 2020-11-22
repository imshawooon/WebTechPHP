<?php 
    $name="";
    $err_name="";
    $email="";
    $err_email="";;
	$message="";
	$err_message="";

    $has_err=false;
    if(isset($_POST["send"])){
		
        if(empty($_POST["name"])){
            $err_name="Name Required";
            $has_err=true;
        }
        else{
            $name=htmlspecialchars($_POST["name"]);
        }
        if(empty($_POST["email"]))
		{
			$err_email = "Email Required";
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
		if(empty($_POST["message"])){
            $err_message="Message Required";
            $has_err=true;
        }
        else{
            $name=htmlspecialchars($_POST["message"]);
        }
	    if(!$has_err){
			$contacts = simplexml_load_file("contact.xml");
			
			$contact = $contacts->addChild("contact");
			$contact->addChild("name",$name);
		    $contact->addChild("email",$email);
			$contact->addChild("nessage",$message);

			//echo "<pre>";
			//print_r($users);
			//echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($contacts->asXML());
			
			
			$file = fopen("contact.xml","w");
			fwrite($file,$xml->saveXML());
		}
	}
	
?>