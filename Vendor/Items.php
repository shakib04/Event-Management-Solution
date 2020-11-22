<?php

$musicequipments="";
$err_musicequipments="";
$food="";
$err_food="";
$lighting="";
$err_lighting="";
$flowers=""; 
$err_flowers="";
$seating="";
$err_seating="";


$has_error = false;


if(isset($_POST["booking"])){
	if(isset($_POST["food"])){
		$err_food ="<span style='color:red;'>Atleast select 1 option </span>";
		$has_error = true;
	}
	else{
		$food=$_POST["food"];
	}
	
	if(isset($_POST["musicequipments"])){
		$err_musicequipments = "<span style='color:red;'>Atleast select 1 option </span>";
		$has_error = true;
	}
	else{
		$food=$_POST["musicequipments"];
	}
	
	
	  if (isset($_POST['lighting'])) {
        $err_type = "<span style='color:red;'>Select 1 </span>";
    }
    
    else{
        $type = $_POST['lighting'];
    }
	
	
	
	  if (isset($_POST['flowers'])) {
        $err_type = "<span style='color:red;'>Select 1 </span>";
    }
    
    else{
        $type = $_POST['flowers'];
    }
	
	
	
	  if (isset($_POST['seating'])) {
        $err_type = "<span style='color:red;'>Select 1 </span>";
    }
    
    
    else{
        $type = $_POST['seating'];
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
          <h1>CHOOSE ITEMS</h1>
		  <form>
		        
		       <table align="left" style="border: 1px solid black";>
					<tr>
					  <td>MusicEquipment:<?php echo $err_musicequipment;?></td>
					  <td>
					    <input type="checkbox" name="MusicEquipment" value="Dj"> Dj<br>
						<input type="checkbox" name="MusicEquipment" value="Stage"> Stage<br>
						<input type="checkbox" name="MusicEquipment" value="Mike And Speakers">Mike And Speakers<br>
					  </td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
					  <td>Food:<?php echo $err_food;?></td>
					  <td>
					    <input type="checkbox" name="food" value="Breakfast"> Breakfast<br>
						<input type="checkbox" name="food" value="Lunch"> Lunch<br>
						<input type="checkbox" name="food" value="Tea & Snacks"> Tea & Snacks<br>
						<input type="checkbox" name="food" value="Dinner"> Dinner<br>
					  </td>
					  <td><?php echo $err_food;?></td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
					  <td>Lighting:</td>
					  <td>
					     <select>
					           <option disabled selected>--Select-</option>
				               <option value="No" selected>No</option>
						       <option value="Normal" selected>Normal</option>
                               <option value="Delux" selected>Delux</option>
							   <option value="Royal" selected>Royal</option>
						 </select>	 <?php echo $err_lighting; ?> 
					  </td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
					  <td>Flowers:</td>
					  <td>
					     <select>
					           <option disabled selected>--Select-</option>
				               <option value="No" selected>No</option>
						       <option value="Normal" selected>Normal</option>
                               <option value="Gorgeous" selected>Gorgeous</option>
						 </select> <?php echo $err_flowers; ?>	   
					  </td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
					  <td>Seating:</td>
					  <td>
					     <select>
					           <option disabled selected>--Select-</option>
				               <option value="Chair" selected>Chair</option>
						       <option value="Chair & Sofa" selected>Chair & Sofa</option>
                               <option value="Sofa" selected>Sofa</option>
						 </select>	   <?php echo $err_Seating; ?>
					  </td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
					<td Colspan="2" align="center"><input type="submit" name="booking" value="booking"></td>
					</tr>
					
			   </table>
			   </Fieldset>
		  </form>
</body>
</html>