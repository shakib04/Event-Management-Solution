<?php
	$fname = "";
	$err_fname = "";
	$lname = "";
	$err_lname = "";
	$dob = "";
	$err_dob = "";
	$cname = "";
	$err_cname = "";
	$mail = "";
	$err_mail = "";
	$adrs = "";
	$err_adrs = "";
	$cnum = "";
	$err_cnum = "";
	$pass = "";
	$err_pass= "";
	$has_error = false;
	
	if(isset ($_POST["Register"]))
	{
		if(empty ($_POST["fname"])){
			$err_fname="First name required";
			$has_error = true;
		}
		elseif(strlen ($_POST["fname"])<3){
			$err_fname="must be 3 characters";
			$has_error = true;	
		}
		else{
			$fname =htmlspecialchars ($_POST["fname"]);
		}
		
		if(empty ($_POST["lname"])){
			$err_lname ="Last name required";
			$has_error = true;
		}
		elseif(strlen ($_POST["lname"])<3){
			$err_lname="must be 3 characters";
			$has_error = true;	
		}
		else{
			$lname =htmlspecialchars ($_POST["lname"]);
		}
		
		if (empty ($_POST["dob"])){
			$err_dob = "Please enter date of birth";
			$has_error = true;
		}
		else{
			$dob = htmlspecialchars ($_POST["dob"]);
		}
		
		if (empty ($_POST["cname"])){
			$err_cname = "Please enter company name";
			$has_error = true;
		}
		else{
			$cname = htmlspecialchars ($_POST["cname"]);
		}
		
		if (empty ($_POST["mail"])){
			$err_mail = "Email required";
			$has_error = true;
		}
		else{
			$mail = htmlspecialchars ($_POST["mail"]);
		}
		
		if (empty ($_POST["adrs"])){
			$err_adrs = "Please enter shop address";
			$has_error = true;
		}
		else{
			$adrs = htmlspecialchars ($_POST["adrs"]);
		}
		
		if (empty ($_POST["cnum"])){
			$err_cnum = "Contact number required";
			$has_error = true;
		}
		elseif(!is_numeric ($_POST["cnum"])){
			$err_cnum="must be numeruc number";
			$has_error = true;	
		}
		elseif(strlen ($_POST["cnum"])<11 ){
			$err_cnum="must be 11 digit";
			$has_error = true;	
		}
		else{
			$cnum = htmlspecialchars ($_POST["cnum"]);
		}
		
		if (empty ($_POST["pass"])){
			$err_pass = "Password required";
			$has_error = true;
		}
		elseif(strlen ($_POST["pass"])<8 ){
			$err_pass="For higher security,must be 8 digit or hugher";
			$has_error = true;	
		}
		else{
			$pass = htmlspecialchars ($_POST["pass"]);
		}
		if(!$has_error){
			$planners = simplexml_load_file("RegData.xml");
			
			$planner = $planners->addChild("planner");
			$planner->addChild("firstname",$fname);
			$planner->addChild("lastname",$lname);
			$planner->addChild("dateofbirth",$dob);
			$planner->addChild("compname",$cname);
			$planner->addChild("email",$mail);
			$planner->addChild("address",$adrs);
			$planner->addChild("cont",$cnum);
			$planner->addchild("password",$pass);
			$planner->addChild("type","planner");
			echo "<pre>";  
			print_r($planners);
			echo "<pre>";
			$xml = new DOMDocument("1.0");
			$xml ->preserveWhiteSpace=false;
			$xml ->formatOutput= true;
			$xml ->loadXML ($planners->asXML());

			
			$file = fopen("RegData.xml","w");
			fwrite($file,$xml->saveXML());
		}
		
	}
?>
<html>
	<head>
		<title>Registration form</title>
	</head>
	<body>
		
		<h2>Planner Registration Form</h2>
		<form action="" method="post">
			<table border=1>
				<tr>
					<td>First Name:</td>
					<td><input type="text" value="<?php echo $fname?>" name="fname"placeholder="Enter First Name"></td>
					<td><span style="color:red">*<?php echo $err_fname;?></span></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><input type="text"value="<?php echo $lname?>" name="lname"placeholder="Enter Last Name"></td>
					<td><span style="color:red">*<?php echo $err_lname;?></span></td>	
				</tr>
				<tr>
					<td>Date of Birth:</td>
					<td><input type="text"value="<?php echo $dob?>" name="dob"placeholder="DD/MM/YYYY"></td>
					<td><span style="color:red">*<?php echo $err_dob;?></span></td>
				</tr>
				
				<tr>
					<td>Company name:</td>
					<td><input type="text"value="<?php echo $cname?>" name="cname"placeholder="Enter store name"></td>
					<td><span style="color:red">*<?php echo $err_cname;?></span></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="text"value="<?php echo $mail?>" name="mail"placeholder="Email address"></td>	
					<td><span style="color:red">*<?php echo $err_mail;?></span></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><input type="text"value="<?php echo $adrs?>" name="adrs"placeholder="Current shop locations"></td>
					<td><span style="color:red">*<?php echo $err_adrs;?></span></td>
				</tr>
				<tr>
					<td>Contact No.:</td>
					<td><input type="text"value="<?php echo $cnum?>" name="cnum"placeholder="Phone number"></td>	
					<td><span style="color:red">*<?php echo $err_cnum;?></span></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password"value="<?php echo $pass?>" name="pass"placeholder="Enter Password"></td>	
					<td><span style="color:red">*<?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td colspan="2" align="right">
						<input type="submit"name="Register" value="Register">
					</td>
				</tr>
					
			</table>
		</form>
		
	</body>
	
</html>