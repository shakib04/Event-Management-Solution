<style>
    #nav>a {
        margin: 5px 10px;
    }

    a {
        color: blue;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .log_out {
        background-color: red;
        padding: 5px;
        color: white;
        direction: ltr;
        display: inline-block;
        margin: 5px;
    }
</style>
<div id="log_out">
    <a href="?log_out=yes" class="log_out"> Log out, <?php echo $_SESSION['username']; ?></a>
</div>
<div id="nav">
    <a href="dashboard.php">Dashboard</a>
    <a href="Messages.php">Messages</a>
    <a href="Orders.php">Orders</a>
    <a href="My-Plans.php">My Plans</a>
    <a href="">Analytics</a>
    <a href="">Earnings</a>
    <a href="">User Request</a>
    <a href="">Contact</a>
    <a href="">My Profile</a>
</div>