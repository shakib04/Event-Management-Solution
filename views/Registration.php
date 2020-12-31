<?php include_once "../controllers/php_codes/Registration_validation.php" ;?>
<html>
    <head>
        <title>Registration</title>
		<style>
        td {
            font-weight: bold;
        }

        form {
            border: 4px solid darkblue;
            width: 600px;
            margin: 0 auto;
            margin-top: 15%;
            padding: 3%;
        }
        </style>
		
		
    </head>
    <body>
        
        <center>
            <form action="" method="POST">
			<div style="background-color:blue; padding: 10px; color:white; font-size: 20px;">Create a new account</div>
                <table>
                    <tr>
                        <td align="left">Full Name:</td>
                        <td align="left"><input type="text" value="<?php echo $fname?>" name="fname"></td>
                        <td align="left"><span style="color:red;">*<?php echo $err_fname;?></span></td>
                    </tr>
                    <tr>
                        <td align="left">User Name:</td>
                        <td align="left"><input type="text" value="<?php echo $username?>" name="username"></td>
                        <td align="left"><span style="color:red;">*<?php echo $err_username;?></span></td>
                    </tr>
                    <tr>
                        <td align="left">Password:</td>
                        <td align="left"><input type="password" value="<?php echo $pass?>" name="pass"></td>
                        <td align="left"><span style="color:red;">*<?php echo $err_pass;?></span></td>
                    </tr>
                    <tr>
                        <td align="left">Confirm Password:</td>
                        <td align="left"><input type="password" value="<?php echo $cpass?>" name="cpass"></td>
                        <td align="left"><span style="color:red;">*<?php echo $err_cpass;?></span></td>
                    </tr>
                    <tr>
                        <td align="left">Gender:</td>
                        <td>
                            <input type="radio" name="gender" value="Male"> Male
                            <input type="radio" name="gender" value="Female"> Female
                        </td>
                        <td align="left"><span style="color:red;">*<?php echo $err_gender;?></span></td>
                    </tr>
                    <tr>
                        <td align="left">E-mail Address:</td>
                        <td align="left"><input type="text" value="<?php echo $email?>" name="email"></td>
                        <td align="left"><span style="color:red;">*<?php echo $err_email;?></span></td>
                    </tr>
                    
                    
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="ok" value="ok">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>