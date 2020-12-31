  
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
         <form action="" method="post" onsubmit="return doOrderValidation()" >  
            <table class="center">
            <tr>
                <td>Account:</td>
                <td><input type="text" id="account" placeholder="Account" name="account"><span id="err_account" style="color:red;">*</span><br></td>
            </tr>
            <tr>
                <td>Event Date:</td>
                <td><input type="text" id="eventdate" placeholder="Event Date" name="eventdate"><span id="err_eventdate" style="color:red;">*</span><br></td>
            </tr>
            <tr>
                <td>Booked By:</td>
                <td><input type="text" id="bookedby" placeholder="Booked By" name="bookedby"><span id="err_bookedby" style="color:red;">*</span><br></td>
            </tr>

            <tr>
                <td>Phone Number:</td>
                <td><input type="number" id="phone" placeholder="Phone" name="phone"><span id="err_phone" style="color:red;">*</span><br></td>
            </tr>

            <tr>
                <td>Address:</td>
                <td><input type="text" id="address" placeholder="Address" name="address"><span id="err_address" style="color:red;">*</span><br></td>
            </tr>
			
			<tr>
                <td>Email:</td>
                <td><input type="text" id="email" placeholder="Email" name="email"><span id="err_email" style="color:red;">*</span><br></td>
            </tr>
			
			<tr>
                <td>Deposit:</td>
                <td><input type="text" id="deposit" placeholder="Deposit" name="deposit"><span id="err_deposit" style="color:red;">*</span><br></td>
            </tr>
			
            <tr>

                <td ></td>
            </tr>
			 <tr>

                <td ></td>
            </tr>
			 <tr>

                <td ></td>
            </tr>
			 <tr>

                <td ></td>
            </tr>
			 <tr>

                <td ></td>
            </tr>
			 <tr>

                <td ></td>
            </tr>
			

			
			<tr align="center">

                <td colspan="4"><input type="submit" name="OK" value="OK"></td>
            </tr>
         
			
        </table>
		  </form>
		    
			 <script src="../scripts/myordervalidation.js"></script>
 
	</body>
</html>