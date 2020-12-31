<?php
    $account="";
	$err_account="";
    $eventdate="";
	$err_eventdate="";
	$bookedby="";
	$err_bookedby="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
    $email="";
    $err_email="";
	$deposit="";
	$err_deposit="";
	
	$countValid= 0;
	
	if(isset($_POST["OK"])){
        //Account VALIDATION
        if(empty($_POST["account"])){
			$err_account="Account Required";	
		}
		else{
			$account = htmlspecialchars($_POST["account"]);
			$countValid++;
        }
		//EventDate VALIDATION
        if(empty($_POST["eventdate"])){
			$err_eventdate="EventDate Required";	
		}
		else{
			$eventdate = htmlspecialchars($_POST["eventdate"]);
			$countValid++;
        }
		//Bookedby VALIDATION
        if(empty($_POST["bookedby"])){
			$err_bookedby="Booked by Required";	
		}
		else{
			$bookedby = htmlspecialchars($_POST["bookedby"]);
			$countValid++;
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
	
	
    //Deposit validation 

    if (empty(trim($_POST['deposit']))) {
        $err_deposit= "<span style='color:red;'> Deposit is Required </span>";
    } else {
        $deposit = htmlspecialchars($_POST['deposit']);
         $CountValid++;
    }
	}
        
        
		if($countValid==4){
			$users = simplexml_load_file("data.xml");
			
            $user = $users->addChild("user");
            $user->addChild("fname",$fullname);
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