<?php 
	
	$xml=simplexml_load_file("data.xml");
	$users = $xml->user;
	$flag=true;
	foreach($users as $user){
		echo "Username: $user->username <br>" ;
		echo "Password: $user->password <br>" ;
		echo "Type: $user->type <br>" ;
	}
	if($flag){
		header("Location: dashboard.php");
	}else{
		echo "Invalid credentiails";
	}
	

?>