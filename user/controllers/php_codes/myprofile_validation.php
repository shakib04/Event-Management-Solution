<?php
    require_once '../models/db_connection.php';
?>
<?php
    $username="";
	$err_username="";
    $Full_Name="";
	$err_Full_Name="";
    $email="";
    $err_email="";
	$phone_number="";
	$err_phone_number="";
	$full_address="";
	$err_full_address="";
	$countValid= 0;
	
	if(isset($_POST["OK"])){
        //FULL NAME VALIDATION
        if(empty($_POST["Full_Name"])){
			$err_Full_Name="Full Name Required";	
		}
		else{
			$Full_Name = htmlspecialchars($_POST["Full_Name"]);
			$countValid++;
        }
		//User name validation
		if(empty($_POST["username"])){
			$err_username="Username Required";
				
		}
		else{
			$username = htmlspecialchars($_POST["username"]);
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
    if (empty(trim($_POST["phone_number"]))) {
        $err_phone_number = "<span style='color:red;'> Phone Number is Required </span>";
    } elseif (!is_numeric($_POST["phone_number"])) {
        $err_phone_number = "<span style='color:red;'> Number is not valid (only numeric) </span>";
    } elseif (strpos($_POST["phone_number"], " ")) {
        $err_phone_number = "<span style='color:red;'> Space is not Allowed </span>";
    } else {
        $phone_number = htmlspecialchars($_POST["phone_number"]);
        $CountValid++;
    }
	
    //address validation 

    if (empty(trim($_POST["full_address"]))) {
        $err_full_address = "<span style='color:red;'> Address is Required </span>";
    } else {
        $"full_address" = htmlspecialchars($_POST["full_address"]);
         $CountValid++;
    }
	}
        
        
		if($countValid==5){
			
		 if(getUser()){
               session_start();
               $_SESSION["username"] = $username;
               setcookie("username",$username,time() + 360);
               
           }
           else{
               echo "Invalid Credentials!";
           }
		   addUser();
        }	
			
		}
		function getUser(){
        global $username,$Full_Name,$email,$phone_number,$full_address;
        $query="SELECT * FROM all_registered_users WHERE fullname='$Full_Name' AND username='$username' AND email='$email' AND phone='$phone_number' AND address='$full_address' ";
        $result=get($query);
        if(count($result)>0){
            return $result ;
        }
        return false;
       }
       function addUser(){
        global $phone_number,$full_address;
        $query="INSERT INTO all_registered_users VALUES('$phone_number','$full_address')";
        execute($query);
      }
			
			
		
	
	
?>