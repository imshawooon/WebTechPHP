<?php
    include 'controllers/product_controller.php';
    $psearch=productsearch($pname);
    if(count($psearch)>0){
        foreach($psearch as $p){
			echo "<span>".$p["pname"]."</span>";
        }
    }
?>