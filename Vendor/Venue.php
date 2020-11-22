<?php
$bookingid="";
$err_bookingid="";
$eventtype="";
$err_eventtype="";
$eventplace="";
$err_eventplace="";
$no_of_guest="";
$_err_no_of_gest="";
$has_error = true;
 
if(isset($_POST["search"])){
	 header('Location:dashboard-admin.php');
     if (empty($_POST["booking id"])) {
   	   $has_err = true;
   	   $err_pass = "Booking ID Required*";
   	 }
	 
	  if (isset($_POST['eventtype'])) {
        $err_type = "<span style='color:red;'>Select 1 </span>";
    }
    
    
    else{
        $type = $_POST['eventtype'];
    }
	
	
	 if (isset($_POST['eventplace'])) {
        $err_type = "<span style='color:red;'>Select 1 </span>";
    }
    
    
    else{
        $type = $_POST['eventplace'];
    }
	
	
	 if (isset($_POST['no_of_guest'])) {
        $err_type = "<span style='color:red;'>Select 1 </span>";
    }
    
    
    else{
        $type = $_POST['no-of-guest'];
    }
}
?>

<html>
<head>
<title>fullscreen image background</title>
<style type="text/css">


</style>


</head>
<body>
          <h1>BOOK VENUE</h1>
		  <form>
		 
		   <table align="left" style="border: 1px solid black";>
			        <tr>
					  <td>Booking Id:</td>
					  <td><input type="text"></td>
					</tr>
					
	
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
					  <td>Event Type:</td>
					  <td>
					  <select>
					       <option disabled selected>--Select--</option>
					       <option>Marrege</option>
						   <option>Family Function</option>
						   <option>Birthday Party</option>
						   <option>Anniversary Party</option>
						   <option>Farewell Party</option>
						   <option>College Events</option>
						 </select>
					  </td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
					  <td>Event Place:</td>
					  <td>
					     <select>
					           <option disabled selected>--Select--</option>
				               <option> </option>
						       <option> </option>
                               <option> </option>
						 </select>	   
					  </td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
					  <td>No of Guest:</td>
					  <td>
					     <select>
						      <option>50</option>
							  <option>100</option>
							  <option>300</option>
							  <option>500</option>
						 </select>
						 
					  </td>
					</tr>
					
				<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					
					<tr>
					<td Colspan="2" align="center"><input type="submit" name="search" value="search"></td>
					</tr>
			   </table>
		  </form>
</body>
</html>