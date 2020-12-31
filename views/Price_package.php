  
<?php
    if(!isset($_COOKIE["username"])){
		header("Location: login.php");
	}
?> 


<html>
    <head>
        <title>Price</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
      .container {
         position: relative;
         font-family: Arial;
		
		 }

      .text-block {
         position: absolute;
		 width:90%;
         height: 615px;
         top: 30px;
         left: 60px;
         background-color:#003399;
         color: white;
         padding-left: 20px;
         padding-right: 20px;
		 }
		 
		 
</style>	   
    </head>
    <body>
	     <?php include "header.php";?>
	    <center>
		 <div class="container">
          <img src="images/web1.jpg" alt="Wedding" style="width:100%;">
         <div class="text-block">
         <h4>Complete Wedding Planning & Solution </h4>
         <p>With many years of experience in event organizing, we understand that there many factors that lead to a well-organized</p>
         <p>and successful event & wedding Planning</p>
         <p>Price  & Packages</p>
         <p><img src="images/images.jpg" alt="Wedding" style="width:70%;"></p>
	  
	 </div> 
     </div>
      </center>

		 
		 
		 
		 
		 
		 
		 
		 </body>
</html>