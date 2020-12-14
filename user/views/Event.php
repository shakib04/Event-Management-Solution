  
<?php
    if(!isset($_COOKIE["uname"])){
		header("Location: login.php");
	}
?> 
<html>
    <head>
        <title>Event</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
	
      .container {
         position: relative;
         font-family: Arial;
		 height: 615px;
        }

      .text-block {
         position: absolute;
		 width:490%;
         height: 1350px;
         top: 10px;
         left: 10px;
		 right: 10px;
		 bottom:10px;
         background-color: #4484CC;
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
          <img src="download.jpg" alt="Wedding" style="width:500%;">
         <div class="text-block">
         <p>High professionalism and dedication</p>
         <p>Set design, Background ,stage ,Photography , Video-story</p>
         <p><img src="pic1.jpg" alt="pic" width="400" height="400">
		 <span><img src="pic2.jpg" alt="pic" width="400" height="400"style="vertical-align:middle;margin:80px 0px"></span></p>
	     <p><img src="pic3.jpg" alt="pic" width="400" height="400">
		 <span><img src="pic6.jpg" alt="pic" width="400" height="400"style="vertical-align:middle;margin:80px 0px"></span></p>
	 </div> 
     </div>
      </center>
		 
		 
		 
		 </body>
</html>