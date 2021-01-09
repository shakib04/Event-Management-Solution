<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$has_error= false;
	if(isset ($_POST["LogIn"]))
	{
		if(empty($_POST["uname"])){
			$err_uname="Username required";
			$has_error = true;
		}
		elseif(strlen ($_POST["uname"])<4){
			$err_uname="must be 4 character";
			$has_error = true;	
		}
		else{
			$uname =htmlspecialchars ($_POST["uname"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password required";
			$has_error = true;
		}
		elseif(strlen ($_POST["pass"])<8){
			$err_pass="must be 8 character";
			$has_error = true;	
		}
		else{
			$pass =htmlspecialchars ($_POST["pass"]);
		}
		if(!$has_error){
			$xml=simplexml_load_file("LogData2.xml");
			$users = $xml->user;
			$flag = false;
			foreach($users as $user)
			{
				if($user->username == $uname && $user->password ==$pass)
				{
					$flag = true;
					setcookie("username",$uname,time() + 120);
				}
			}
			if($flag)
			{
				header("Location: dashboard.php");
			}
			else
			{
				echo "invalid";
			}
		}
	}
		
	
?>
<html>
	<head>
		<title>LOGIN FORM</title>
	</head>
	<body>
		<fieldset>
			<h1>LOGIN FORM</h1>	
			<form action="" method="post">
				<table>
					<tr>
						<td>Username: </td>
						<td><input type="text" value="<?php echo $uname?>" name="uname"placeholder = "Enter Username"></td>
						<td><span style="color:red">*<?php echo $err_uname;?></span></td>
					</tr>
				    <tr>
						<td>Password: </td>
						<td> <input type="text" value="<?php echo $pass?>" name="pass"placeholder = "Enter Password"></td>
						<td><span style="color:red">*<?php echo $err_pass;?></span></td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<a href="RegistrationForm.php"> Not registered yet? </a> &nbsp;&nbsp;&nbsp;
							<input type="submit" name="LogIn" value="LogIn">
						</td>
					</tr>
				</table
		
			</form>
		</fieldset>
	</body>	
</html>