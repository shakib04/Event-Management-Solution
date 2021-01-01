  
<?php
     require_once "session-code.php";
	
	require_once"../controllers/php_codes/myorder_validation.php" ;
?> 


<html>
    <head>
        <title>clients</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
      .container {
         position: relative;
         font-family: Arial;
        }

      .text-block {
         position: absolute;
		 width:40%;
         height: 415px;
         top: 100px;
         left: 280px;
         background-color:#f2f2f2;
         color: black;
         padding-left: 20px;
         padding-right: 20px;
		 }
		 
		 
</style>	
	
	
	</head>
    <body>
	     <?php include "header.php";?>
		 <form action=" " method="post" >  
   <center>
		 <div class="container">
          <img src="images/web1.jpg" alt="Wedding" style="width:100%;">
         <div class="text-block">
         <h1>Event Order</h1>
        <table>
            <tr>
                <td>Account:</td>
                <td><input type="text" value="<?php echo $account?>"  placeholder="Account" name="account"></td>
                <td><span style="color:red;">*<?php echo $err_account;?></span></td>
            </tr>
            <tr>
               <td>Event Date:</td>
                <td><input type="text" value="<?php echo $eventdate?>" placeholder="Event Date" name="eventdate"></td>
                <td><span style="color:red;">*<?php echo $err_eventdate;?></span></td>
            </tr>
            <tr>
               <td>Booked By:</td>
                <td><input type="text" value="<?php echo $bookedby?>"  placeholder="Booked By" name="bookedby"></td>
                <td><span style="color:red;">*<?php echo $err_bookedby;?></span></td>
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
                <td>Email:</td>
                <td><input type="text" value="<?php echo $email?>" placeholder="Email" name="email"></td>
                <td><span style="color:red;">*<?php echo $err_email;?></span></td>
            </tr>
			
			<tr>
                <td>Deposit:</td>
                <td><input type="text" value="<?php echo $deposit?>"  placeholder="Deposit" name="deposit"></td>
				<td><span style="color:red;">*<?php echo $err_deposit;?></span></td>
				
                
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
                
	 </div> 
     </div>
      </center>

		 
		 
		 
		 
		 		 
		 
		 
		 </body>
</html>