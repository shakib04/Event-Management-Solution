<?php

    $fname="";
	$err_fname="";
	$username="";
	$err_username="";
	$pass="";
    $err_pass="";
    $cpass="";
    $err_cpass="";
    $gender="";
    $err_gender="";
    $email="";
    $err_email="";
	$countValid= 0;
	
	if(isset($_POST["ok"])){
        //FULL NAME VALIDATION
        if(empty($_POST["fname"])){
			$err_fname="Full Name Required";	
		}
		else{
			$fname = htmlspecialchars($_POST["fname"]);
			$countValid++;
        }
        //USERNAME VALIDATION
		if(empty($_POST["username"])){
			$err_username="Username Required";
				
        }
        elseif((strlen($_POST["username"])<6)){
            $err_username="Username must be 6 characters long!";
           
        }
		else{
			$username = htmlspecialchars($_POST["username"]);
			$countValid++;
        }
        //PASSWORD VALIDATION
		if(empty($_POST["pass"])){
            $err_pass="Please Enter Password!";
            
        }
        elseif(strlen($_POST["pass"])<8){
            $err_pass="Password must be 8 characters long.";
            
        }
        elseif(!strpos($_POST['pass'], "1") && !strpos($_POST['pass'], "2") && !strpos($_POST['pass'], "3") && !strpos($_POST['pass'], "4")
            && !strpos($_POST['pass'], "5") && !strpos($_POST['pass'], "6") && !strpos($_POST['pass'], "7") && !strpos($_POST['pass'], "8")
            && !strpos($_POST['pass'], "9") && !strpos($_POST['pass'], "0")) {
            $err_pass="Password must have 1 numeric";
           
        }
        elseif(strcmp(strtoupper($_POST["pass"]),$_POST["pass"])==0 && strcmp(strtolower($_POST["pass"]),$_POST["pass"])==0){
            $err_pass="Password must contain 1 Upper and Lowercase letter.";
          
        }
        elseif(strpos($_POST["pass"],"#")==false && strpos($_POST["pass"],"?")==false){
            $err_pass="Password must contain '#' or '?'.";
           
        }
        elseif(empty($_POST["cpass"])){
            $err_cpass="Please Enter Confirm Password!";
           
        }
        elseif(strcmp($_POST["cpass"],$_POST["pass"])!=0){
            $err_cpass="Password and Confirm Password must be same.";
          
        }
        else{
            $pass=htmlspecialchars($_POST["pass"]);
			$countValid++;
        }
       
        
        //GENDER VALIDATION
        if(isset($_POST["gender"])){
            $gender=$_POST["gender"];
			$countValid++;
        }
        else{
            $err_gender="Select a Gender!";
           
        }
        //EMAIL VALIDATION
        if(empty($_POST["email"])){
            $err_email="Please Enter Email!";
            
        }
        elseif(strpos($_POST["email"],"@") && strpos($_POST["email"],".")){
            if(strpos($_POST["email"],"@") < strpos($_POST["email"],".")){
                $email=htmlspecialchars($_POST["email"]);
				$countValid++;
            }
            else{
                $err_email="'@' Must be before '.'.";
                
            }
        }
        else{
            $err_email="Email must contain '@' and '.'.";
          
        }
	}
        
        
		if($countValid==5){
			$users = simplexml_load_file("data.xml");
			
            $user = $users->addChild("user");
            $user->addChild("fname",$fname);
			$user->addChild("username",$username);
            $user->addChild("pass",$pass);
            $user->addChild("gender",$gender);
            $user->addChild("email",$email);
			echo "<pre>";
			print_r($users);
			echo "</pre>";
            
            
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			$file = fopen("data.xml","w");
			fwrite($file,$xml->saveXML());
			header("Location:login.php");
			
		}
			
			
		
	
	
?>