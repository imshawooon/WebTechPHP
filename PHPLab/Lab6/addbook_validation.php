<?php
	
	$bno="";
	$bname="";
	$err_bname="";
	$pname="";
	$err_pname="";
	$isbn="";
	$err_isbn="";
	$price="";
	$err_price="";
	
	$has_error = false;
	
	if(isset($_POST["submit"])){
		if(empty($_POST["bname"])){
			$err_bname=" *Book name Required";
			$has_error = true;
		}
		else{
			$bname=htmlspecialchars($_POST["bname"]);
		}

		if(empty($_POST["pname"])){
			$err_pname=" *Publisher name Required";
			$has_error = true;
		}
		else{
			$pname=htmlspecialchars($_POST["pname"]);
		}

		if(empty($_POST["isbn"])){
			$err_isbn=" *ISBN Required";
			$has_error = true;
		}
		else{
			$isbn=htmlspecialchars($_POST["isbn"]);
		}

		if(empty($_POST["price"])){
			$err_bname=" *Price Required";
			$has_error = true;
		}
		else{
			$price=htmlspecialchars($_POST["price"]);
		}
		
		if(!$has_error){
			$books = simplexml_load_file("book.xml");
			
			$book = $books->addChild("book");
			$book->addChild("bno",$bno);
			$book->addChild("bname",$bname);
			$book->addChild("pname",$pname);
			$book->addChild("isbn",$isbn);
			$book->addChild("price",$price);
			echo "<pre>";
			print_r($books);
			echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($books->asXML());
			
			
			
			$file = fopen("book.xml","w");
			fwrite($file,$xml->saveXML());
		}
	}
	
?>