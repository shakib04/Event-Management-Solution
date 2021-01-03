<?php

require_once "session-code.php";


?>
 
<html>
<head>
    
    <title>USER</title>
     <link rel="stylesheet" type="text/css" href="css/mystyles.css"> 
    <style>
    .search-planner {
        width: 70%;
        padding: 5px;
    }

    .search-button {
        padding: 5px;
        cursor: pointer;
    }
</style>
</head>

<body>
	
    <form action="" method="post">
        <input type="submit" value="Log Out,<?php echo $_SESSION['username']; ?>" class="log-out-button" name="logout">
    </form>
     
    <div class="layout grid-cont">
        
        <div class="navigation grid-item">
		    <a href="user.php">Home</a>
            <a href="book_event.php">Book an Event</a>
            <a href="Event.php">Event set design </a>
			<a href="myorder.php">Order </a>
            <a href="our_clients.php">Our clients </a>
            <a href="services_we_provide.php">services we provide </a>
            <a href="myprofile.php">My Profile</a>
			
		
        </div>
       	<form action="">
        <input type="text" placeholder="What are you looking for?" onkeyup="searchPlanner(this)" class="search-planner">
       <input type="submit" value="Search" class="search-button">
       </form> <br>
       <div id="result"></div>
      
		
         <!-- Photo Grid -->
        <div class="row"> 
        <div class="column">
        <!-- <img src="images/web1.jpg" style="width:100%"> -->
       
        </div>
		
<script src="../scripts/search.js"></script>
      
</body>
</html>