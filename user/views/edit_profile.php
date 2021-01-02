  
<?php
    require_once "session-code.php";
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
		<form action="" method="post" onsubmit="return doEditProfileValidation()">  
        <table>
         
            <table class="center">
            <tr>
                <td>Username:</td>
                <td><input type="text" id="username" placeholder="Username" name="username"><span id="err_username" style="color:red;">*</span><br></td>
            </tr>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" id="Full_Name" placeholder="Fullname" name="Full_Name"><span id="err_Full_Name" style="color:red;">*</span><br></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" id="email" placeholder="Email" name="email"><span id="err_email" style="color:red;">*</span><br></td>
            </tr>

            <tr>
                <td>Phone Number:</td>
                <td><input type="number" id="phone_number" placeholder="Phone" name="phone_number"><span id="err_phone_number" style="color:red;">*</span><br></td>
            </tr>

            <tr>
                <td>Address</td>
                <td><input type="text" id="full_address" placeholder="Address" name="full_address"><span id="err_full_address" style="color:red;">*</span><br></td>
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