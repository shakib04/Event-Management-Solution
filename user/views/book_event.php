  
<?php
    require_once "session-code.php";
	require_once"../controllers/php_codes/bookevent_validation.php" ;
?> 


<html>
    <head>
        <title>BookEvent</title>
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
         background-color: whitesmoke;
         color: black;
         padding-left: 20px;
         padding-right: 20px;
		 }
		 .image{
           position: absolute;
		   width:500px;
		   height: 1000px;
           top: 30px;
           right:450px;
         }
		 div.absolute{
           position:absolute;
           left: 200px;
           top: 100px;
          
         }
		 div.absolute1{
           position:absolute;
           left:350px;
		   top: 280px;
		   color: blue;
          
         }
		
		 
</style>	   
    </head>
    <body>
    <?php include "mypagehead.php";?>
		 <form action=" " method="post" >  
	    <center>
		 <div class="container">
          <img src="images/web1.jpg" alt="Wedding" style="width:100%;">
         <div class="text-block">
		 <div class="image">
		 </div>
		 <div class="absolute">
         
		 <tr><td>Comment : </td></tr>
         <tr><td><textarea value="<?php echo $comment?>" name="comment" rows="10" cols="30"></textarea></td></tr>
		 <td><span style="color:red;">*<?php echo $err_comment;?></span></td>
		 </div>
		 <div class="absolute1">
		 <tr>

                <td><input type="submit" name="Submit" value="Submit"></td>
            </tr>
		 </div>
         
	  
	 </div> 
     </div>
      </center>

		 
		 
		 
		 
		 
		 
		 
		 </body>
</html>