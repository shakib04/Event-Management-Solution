  
<?php
    if(!isset($_COOKIE["username"])){
		header("Location:login.php");
	}
	require_once"../controllers/php_codes/myeditprofile_validation.php" ;
?> 



<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profile</title>
		<style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 15px;
			text-align: center;
        }

        tr:nth-child(odd) {
            background-color: aliceblue;
        }

        tr:nth-last-child(even) {
            background-color: whitesmoke;
        }

		table.center {
            margin-left: auto; 
            margin-right:  auto;
}
        body {text-align:center;}
		
    </style>
		   
    </head>
    <body style="text-align:center;">
	 
		 <div>
        <h2>Edit My Profile Details</h2>
		 <form action="" method="post" >  
        <table>
        
            <table class="center">
            <tr>
                <td>Username:</td>
                <td><input type="text" value="<?php echo $username;?>" placeholder="Username" name="username"><span style="color:red;">*<?php echo $err_username;?></span></td>
                
            </tr>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" value="<?php echo $Full_Name?>" placeholder="Fullname" name="fullname"><span style="color:red;">*<?php echo $err_Full_Name;?></span></td>
                 
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" value="<?php echo $email?>" placeholder="Email" name="email"><span style="color:red;">*<?php echo $err_email;?></span></td>
                
            </tr>

            <tr>
                <td>Phone Number:</td>
                 <td><input type="text" value="<?php echo $phone_number?>"placeholder="Phone Number" name="phone"><span style="color:red;">*<?php echo $err_phone_number;?></span></td>
               
            </tr>

            <tr>
                <td>Address</td>
                 <td><input type="text" value="<?php echo $full_address?>" placeholder="Address" name="address"><span style="color:red;">*<?php echo $err_full_address;?></span></td>
                
            </tr>
			
            <tr>

                <td colspan="2"><input type="submit" name="OK" value="OK"></td>
            </tr>
            <tr>

                <td colspan="2"><a href="profile.php">Back</a></td>
            </tr>
           
        </table>
		  </form>
		    
			 
 
	</body>
</html>