<?php
    $pid="";
    $err_pid="";	
    $pname="";
    $err_pname="";
	$price="";
	$err_price="";
	$ptype="";
    $err_ptype="";
	$description="";
	$err_description="";
	
    $has_err=false;
	
    if(isset($_POST["create"])){
		
		if(empty($_POST["pid"])){
            $err_pid="Product Id Required";
            $has_err=true;
        }
        else{
            $pid=htmlspecialchars($_POST["pid"]);
        }
        if(empty($_POST["pname"])){
            $err_pname="Product Name Required";
            $has_err=true;
        }
        else{
            $pname=htmlspecialchars($_POST["pname"]);
        }

        if(empty($_POST["price"])){
			$err_price="Price Required";
			$has_err=true;
		}
		else{
		    $price=htmlspecialchars($_POST["price"]);
		}
		if(isset($_POST["ptype"])){
            $ptype=htmlspecialchars($_POST["ptype"]);
        }
        else{
            $err_ptype="Please Select Product type";
            $has_err=true;
        }
		if(empty($_POST["description"])){
            $err_description="Description Required";
            $has_err=true;
        }
        else{
            $description=htmlspecialchars($_POST["description"]);
        }
	    if(!$has_err){
			
			$products = simplexml_load_file("product.xml");
			$a= $products->product;
			$product = $products->addChild("product");
			$product->addChild("serial",count($a));
			$product->addChild("pid",$pid);
			$product->addChild("pname",$pname);
			$product->addChild("price",$price);
			$product->addChild("ptype",$ptype);
			$product->addChild("description",$description);
	
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($products->asXML());
			
			
			$file = fopen("product.xml","w");
			fwrite($file,$xml->saveXML());
			header("Location: products_info.php");
		}
	}
	
?>