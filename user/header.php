  <?php
    if(!isset($_COOKIE["uname"])){
		header("Location: login.php");
	}
?>
<html> 
<head>
    
    <title>USER</title>
    <link rel="stylesheet" type="text/css" href="mystyles.css">
    
</head>

<body>

     <div class="log-out grid-item">
	    <a href="login.php">logout</a>
	</div>
	
    <div class="layout grid-cont">
        
        <div class="navigation grid-item">
		    <a href="user.php">Homepage</a>
            <a href="Price_package.php">Price & package </a>
            <a href="Event.php">Event set design </a>
			<a href="order.php">Order </a>
            <a href="our_clients.php">Our clients </a>
            <a href="services_we_provide.php">services we provide </a>
            <a href="profile.php">My Profile</a>
			
			
        </div>
        <div class="search-bar ">
            <input type="text" placeholder="What are you looking for?"> <button>Search</button>
        </div>
	</html>	