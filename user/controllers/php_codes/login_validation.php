<?php
    session_start();
	$username="";
	$err_username="";
	$pass="";
	$err_pass="";
	$hasError=false;
	$flag=false;
	if(isset($_POST["login"])){
		if(empty($_POST["username"])){
			$err_username="Username Required";
			$hasError =true;	
		}
		else{
			$username = htmlspecialchars($_POST["username"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
        }
		
		if(!$hasError){
			$users = simplexml_load_file("data.xml");
			$flag=false;
			foreach($users as $user){
                if(strcmp($user->username,$_POST["username"])==0 && strcmp($user->pass,$_POST["pass"])==0){
					$flag=true;
					break;
                }
			}
			
			if(!$flag){
				echo "Invalid Credentials!";
			}
			else{
				session_start();
			    $_SESSION["username"] = $username;
			    setcookie("username",$username,time() + 360);
                header("Location:user.php");
			}
		}
	}
	
?>