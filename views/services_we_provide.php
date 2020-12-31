  
<?php
    if(!isset($_COOKIE["username"])){
		header("Location: login.php");
	}
?>
<html>
    <head>
        <title>Service</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
	     <?php include "header.php";?>
	    <form action="" method="POST">
		
		<center>
             <table>
			   
            <div class="container">
             <img src="images/web1.jpg" alt="Background picture" style="width:100%;">
              <div class="content">
              <p style="font-size:20px;font-style: italic;">Service WE Provide</p>
              <p style="font-size:20px;font-style: italic;">A directory of complete wedding,bithday & event</p>
              <p style="font-size:30px;font-style: italic;">to Help plan your perfect wedding,birthday & event day.</p>
		      <p style="font-size:15px;font-style: italic;">*Online Since 2019*</p>
		      </div>
			  </div>
		    </table>
			</center>
        </form>
	</body>
</html>