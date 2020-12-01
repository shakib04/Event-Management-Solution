<?php

require_once "common-codes/session-code.php";


?>

<html>

<head>
    <title>Dasboard</title>
    <style>
        .inter-linked-pages {
            background-color: #f1dac5;
            padding: 20px;
        }

        .inter-linked-pages a {
            padding: 15px;
            text-decoration: none;
            font-size: 20px;
        }

        a:hover {
            text-decoration: underline;
            color: black;
            transition: 0.7s;
        }

        .all-section {
            margin-top: 15px;
        }

        .all-section>h2 {
            text-align: center;
            background-color: #d2dae2;
            padding: 20px;

        }

        .all-section>div {
            width: 45%;
            padding: 30px;
            float: left;
            margin: 20px;
            min-height: 250px;
        }

        .all-section>div>.details {
            background-color: #2C3A47;
            /* Green */
            border: none;
            color: white;
            padding: 15px;
            margin-top: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        .all-section>div:nth-child(even) {
            background-color: #d1d8e0;

        }

        .all-section>div:nth-child(odd) {
            background-color: #CAD3C8;
        }

        .active-dashboard {
            background-color: aliceblue;
        }
    </style>
</head>

<body>

    <?php include_once "common-codes/nav-bar.php" ?>

    <div class="all-section">
        <h2>System Summery </h2>
        <div class="this-month-profit-summery">
            <h3>November, 2020 Profit [Upto]</h3>
            <h2>300,000 Taka</h2>

        </div>

        <div class="new-registered-users">
            <h3>New Registered</h3>
            <ul>
                <li>
                    <a href="">Planner Username</a>
                </li>
                <li>
                    <a href="">Client Username</a>
                </li>
                <li>
                    <a href="">Client Username</a>
                </li>
            </ul>
            <a href="new-registered.php" class="details">Check Full List</a>
        </div>

        <div class="list-of-client">
            <h3>Top Client [Based on Purchase]</h3>
            <ol>
                <li>
                    <a href="">abc</a>
                </li>
                <li>
                    <a href="">xyz</a>
                </li>
                <li>
                    <a href="">mnp</a>
                </li>
            </ol>
            <a href="client-users-list.php" class="details">Check Full List</a>
        </div>

        <div class="list-of-planners">
            <h3>Top Planners [Based on Earnings and Ratings]</h3>
            <ol>
                <li>
                    <a href="">p123 [Taka 150,000]</a>
                </li>
                <li>
                    <a href="">x234 [Taka 130,000]</a>
                </li>
                <li>
                    <a href="">t3453 [Taka 120,000] </a>
                </li>
            </ol>
            <a href="event-planners-list.php" class="details">Check Full List</a>
        </div>

        <div class="stats">
            <h3>Today Total Plan Purchased And Amount</h3>
            <blockquote> Total 10 Plans, Amount = 250,000 Taka</blockquote>
            <a href="business-stats.php" class="details">Check Full List</a>
        </div>
    </div>

</body>

</html>