  
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
    <?php include "mypagehead.php";?>
		 
		 <div>
        <h2>My Profile Details</h2>
		<form action="" method="post" onsubmit="return doProfileValidation()"> 
        <table>
          
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

                <td colspan="2"><button onclick="loadEditProfile()">Edit Profile </button></td>
            </tr>
			
           
        </table>
		  </form>
		      <div id="output">
			
			</div>
			<script>
			     function loadEditProfile() {
                     var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                       if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("output").innerHTML = this.responseText;
                      }
                     };
                    xhttp.open("GET", "myedit_profile.php", true);
                    xhttp.send();
                        }
			</script>
			 <script src="../scripts/profilevalidation.js"></script>
			 
			
 
	</body>
</html>