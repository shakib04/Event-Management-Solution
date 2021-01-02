<?php

require_once "session-code.php";

$start_date = $end_date = $err_start_date = $err_end_date = "";
$validCount = 0;
require_once "../controller/BusinessController.php";



if ($validCount == 2) {
    $purchaseDetails = getPurchaseDetailsByDate2($start_date, $end_date);
    //print_r($purchaseDetails);
} elseif ($validCount == 3) {
    $purchaseDetails = getPurchaseDetailsByDate($start_date, $end_date, $status);
    //print_r($purchaseDetails);
}

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
        }

        h2 {
            margin: 10px;
        }

        .red_message {
            color: red;
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

        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        From: <input type="date" value="<?php echo $start_date; ?>" name="start_date" id="">
                        <span class="red_message"> <?php echo $err_start_date; ?></span>
                        <br>
                    </td>
                    <td>
                        To: <input type="date" value="<?php echo $end_date; ?>" name="end_date" id="">
                        <span class="red_message"> <?php echo $err_end_date; ?></span>
                        <br>
                    </td>
                    <td>
                        <input type="checkbox" name="paid" id="" value="paid"> Paid &nbsp; <input type="checkbox" name="unpaid" id="" value="unpaid"> Unpaid
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="get_purchase_data" value="Get Purchased Data">

                    </td>
                </tr>
            </table>

        </form>

        <div id="purchase-table">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Planner</th>
                </tr>
                <?php
                if (isset($_POST['get_purchase_data']) && $validCount >= 2) {
                    foreach ($purchaseDetails as $purchase) {
                        echo "<tr>";
                        echo "<td>" . $purchase['purchased_id'] . "</td>";
                        echo "<td>" . $purchase['service_price'] . "</td>";
                        echo "<td>" . $purchase['status(paid/unpaid)'] . "</td>";
                        echo "<td>" . $purchase['planner_username'] . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
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