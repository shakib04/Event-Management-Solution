<?php
    $username="";
	$err_username="";
    $fullname="";
	$err_fullname="";
    $email="";
    $err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$countValid= 0;
	
	if(isset($_POST["OK"])){
        //FULL NAME VALIDATION
        if(empty($_POST["fullname"])){
			$err_fullname="Full Name Required";	
		}
		else{
			$fullname = htmlspecialchars($_POST["fullname"]);
			$countValid++;
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
		
	//phone validation	
    if (empty(trim($_POST['phone']))) {
        $err_phone = "<span style='color:red;'> Phone Number is Required </span>";
    } elseif (!is_numeric($_POST['phone'])) {
        $err_phone = "<span style='color:red;'> Number is not valid (only numeric) </span>";
    } elseif (strpos($_POST['phone'], " ")) {
        $err_phone = "<span style='color:red;'> Space is not Allowed </span>";
    } else {
        $phone = htmlspecialchars($_POST["phone"]);
        $CountValid++;
    }
	
    //address validation 

    if (empty(trim($_POST['address']))) {
        $err_address = "<span style='color:red;'> Address is Required </span>";
    } else {
        $address = htmlspecialchars($_POST['address']);
         $CountValid++;
    }
	}
        
        
		if($countValid==4){
			$users = simplexml_load_file("data.xml");
			
            $user = $users->addChild("user");
            $user->addChild("fullname",$fullname);
			$user->addChild("username",$username);
            $user->addChild("email",$email);
			$user->addChild("email",$phone);
			$user->addChild("email",$address);
			echo "<pre>";
			print_r($users);
			echo "</pre>";
            
            
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			$file = fopen("data.xml","w");
			fwrite($file,$xml->saveXML());
			
			
		}
			
			
		
	
	
?>