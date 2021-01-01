 
<?php
     include_once "../controllers/php_codes/login_validation.php" ;
?> 
<html>
    <head>
        <title>Login</title>
		<style>
        td {
            font-weight: bold;
        }

        form {
            border: 4px solid darkblue;
            width: 300px;
            margin: 0 auto;
            margin-top: 15%;
            padding: 3%;
        }
        </style>
    </head>
    <body>
        
            <form action="" method="POST">
			<center>
			<div style="background-color:blue; padding: 10px; color:white; font-size: 20px;">Login</div>
			</center>
                <table>
                    <tr>
                        <td align="left">User Name:</td>
                        <td align="left"><input type="text" value="<?php echo $username;?>" name="username"></td>
                        <td align="left"><span style="color:red;">*<?php echo $err_username;?></span></td>
                    </tr>
                    <tr>
                        <td align="left">Password:</td>
                        <td align="left"><input type="password" value="<?php echo $pass;?>" name="pass"></td>
                        <td align="left"><span style="color:red;">*<?php echo $err_pass;?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="login" value="Login">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>