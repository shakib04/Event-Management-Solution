<?php

require_once "session-code.php";
require_once "../controller/BusinessController.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Business Profile</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 15px;
        }

        tr:nth-child(odd) {
            background-color: aliceblue;
        }

        tr:nth-last-child(even) {
            background-color: whitesmoke;
        }

        .business-stats {
            margin: 30px auto;
            width: 800px;
        }

        .active-my-business {
            background-color: aliceblue;
        } h2{
            margin: 10px;
        }
    </style>
</head>

<body>

    <?php include_once "nav-bar.php" ?>

    <div class="business-stats">
        <div class="payment-info">
            <h2>Total Paid Payment</h2>
            <?php
            $paidAmountSum = getPaidAmountSum();

            echo "<p>=" . $paidAmountSum[0]['paidAmountSum'] . " Taka</p>"
            ?>
            <h2>Total Unpaid Payment</h2>
            <?php
            $unpaidAmountSum = getUnPaidAmountSum();
            echo "<p>=" . $unpaidAmountSum[0]['unpaidAmountSum'] . " Taka</p>"
            ?>
            <h2>Total Paid And Unpaid Payment</h2>
            <?php
            $amountSum = getAmountSum();
            
            echo "<p>=" . $amountSum[0]['amountSum'] . " Taka</p>"
            ?>
        </div>
        <h3>My Business Statistics</h3>
        <table>
            <tr>
                <td>This Month Earning [Up To Today]</td>
                <td>Amount: 200,000 Taka</td>
            </tr>

            <tr>
                <td>Projected Earning of September [Using Forecast]</td>
                <td>Amount: 310,000 Taka</td>
            </tr>

            <tr>
                <td>Previous Month Earning</td>
                <td>Amount: 300,000 Taka</td>
            </tr>

            <tr>
                <td>Total Earning [2020]</td>
                <td>Amount: 10,50, 250 Taka</td>
            </tr>

            <tr>
                <td>This Month New Registered</td>
                <td>
                    <ul>
                        <li>Planner: 50,</li>
                        <li>Client User: 125</li>
                    </ul>
                </td>
            </tr>

            <tr>
                <td>Registered Client User Ratio[Daily] This Month</td>
                <td>
                    Ratio: 2.3 %
                </td>
            </tr>

            <tr>
                <td>Registered Planner Ratio[Daily] This Month</td>
                <td>Ratio: 1%</td>
            </tr>
        </table>
    </div>
</body>

</html>