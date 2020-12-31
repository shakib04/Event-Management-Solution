  
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
	     <?php include "header.php";?>
		 <div>
        <h2>Edit My Profile Details</h2>
        <table>
         <form action=" " method="post" >  
            <table class="center">
            <tr>
                <td>Username:</td>
                <td><input type="text" value="<?php echo $_SESSION['username'];?>" placeholder="Username" name="username"></td>
                <td><span style="color:red;">*<?php echo $err_username;?></span></td>
            </tr>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" value="<?php echo $fullname?>" placeholder="Fullname" name="fullname"></td>
                 <td><span style="color:red;">*<?php echo $err_fullname;?></span></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" value="<?php echo $email?>" placeholder="Email" name="email"></td>
                <td><span style="color:red;">*<?php echo $err_email;?></span></td>
            </tr>

            <tr>
                <td>Phone Number:</td>
                 <td><input type="text" value="<?php echo $phone?>"placeholder="Phone Number" name="phone"></td>
                <td><span style="color:red;">*<?php echo $err_phone;?></span></td>
            </tr>

            <tr>
                <td>Address</td>
                 <td><input type="text" value="<?php echo $address?>" placeholder="Address" name="address"></td>
                <td><span style="color:red;">*<?php echo $err_address;?></span></td>
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