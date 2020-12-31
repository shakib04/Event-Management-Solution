  
<?php
    if(!isset($_COOKIE["username"])){
		header("Location:login.php");
	}
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
        <h2>My Profile Details</h2>
        <table>
         <form action="" method="post" onsubmit="return doProfileValidation()">  
            <table class="center">
            <tr>
                <td>Username:</td>
                <td><input type="text" id="username" placeholder="Username" name="username"><span id="err_username" style="color:red;">*</span><br></td>
            </tr>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" id="fullname" placeholder="Fullname" name="fullname"><span id="err_fullname" style="color:red;">*</span><br></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" id="email" placeholder="Email" name="email"><span id="err_email" style="color:red;">*</span><br></td>
            </tr>

            <tr>
                <td>Phone Number:</td>
                <td><input type="number" id="phone" placeholder="Phone" name="phone"><span id="err_phone" style="color:red;">*</span><br></td>
            </tr>

            <tr>
                <td>Address</td>
                <td><input type="text" id="address" placeholder="Address" name="address"><span id="err_address" style="color:red;">*</span><br></td>
            </tr>
			
            <tr>

                <td colspan="2"><input type="submit" name="OK" value="OK"></td>
            </tr>

            <tr>

                <td colspan="2"><a href="edit_profile.php">Edit Profile</a></td>
            </tr>
           
        </table>
		  </form>
		    
			 <script src="../scripts/profilevalidation.js"></script>
 
	</body>
</html>