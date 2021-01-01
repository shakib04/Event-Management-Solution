<?php
    $price="";
	$err_price="";
    $comment="";
	$err_comment="";
	$countValid= 0;
	
	if(isset($_POST["Submit"])){
        //Price VALIDATION
        if(empty($_POST["price"])){
			$err_price="Price Required";	
		}
		else{
			$price = htmlspecialchars($_POST["price"]);
			$countValid++;
        }
		//Comment VALIDATION
        if(empty($_POST["comment"])){
			$err_comment="comment Required";	
		}
		else{
			$comment= htmlspecialchars($_POST["comment"]);
			$countValid++;
        }
		
	}
      