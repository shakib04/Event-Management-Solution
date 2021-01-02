  
 <?php
    require_once "session-code.php";
    require_once "../controllers/UserController.php";
    $columns = getUserDetails($_SESSION['username']);
    require_once "../controllers/php_codes/myeditprofile_validation.php";
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
    <?php include "mypagehead.php";?>
	 
		 <div>
        <h2>Edit My Profile Details <?php echo $_SESSION['username']; ?></h2>
		 <form action="" method="post" onsubmit="return doEditProfileValidation()" >  
        <table>
        
            <table class="center">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" id="Full_Name" value="<?php echo $Full_Name?>" placeholder="Fullname" name="fullname"><span id="err_Full_Name" style="color:red;"></span>
                <span style="color:red;"><?php echo $err_Full_Name;?></span></td>
                 
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" id="email" value="<?php echo $email?>" placeholder="Email" name="email"><span id="err_email" style="color:red;"></span>
                <span style="color:red;"><?php echo $err_email;?></span></td>
                
            </tr>

            <tr>
                <td>Phone Number:</td>
                 <td><input type="text" id="phone_number" value="<?php echo $phone_number?>" placeholder="Phone Number" name="phone"><span id="err_phone_number" style="color:red;"></span>
                 <span style="color:red;"><?php echo $err_phone_number;?></span></td>
               
            </tr>

            <tr>
                <td>Address</td>
                 <td><input type="text" id="full_address" value="<?php echo $full_address?>" placeholder="Address" name="address"><span id="err_full_address" style="color:red;"></span>
                 <span style="color:red;"><?php echo $err_full_address;?></span></td>
                
            </tr>
			<tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Save">
                </td>
            </tr>

        </table>
		  </form>
		    
          <script src="../scripts/editprofilevalidation.js"></script>	 
 
	</body>
</html>