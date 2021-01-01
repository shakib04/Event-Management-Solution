

.....................problem..................


<?php
    require_once '../models/db_connection.php';
?>
<?php
    if(isset($_POST["OK"])){
        $username=htmlspecialchars($_POST["username"]);
		$fullname=htmlspecialchars($_POST["fullname"]);
        $email=htmlspecialchars($_POST["email"]);
        $phone=htmlspecialchars($_POST["phone"]);
		$address=htmlspecialchars($_POST["address"]);
        addUser();
        
    }
    
    
    function addUser(){
        global $username,$fullname,$email,$phone,$address;
        $query="INSERT INTO users VALUES('$username','$fullname','$email','$phone','$address')";
        execute($query);
    }
?>