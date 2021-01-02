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

//echo date("Y-n-j", strtotime("first day of previous month")) . "<br>";
$firstDayThisMonth = date("Y-n-j", strtotime("first day of this month"));
$lastDayThisMonth = date("Y-n-j", strtotime("last day of this month"));
//echo date("Y-n-j", strtotime("last day of previous month")) . "<br>";
//echo date("Y-n-j", strtotime("first day of this month")) . "<br>";
//echo date("Y-n-j", strtotime("last day of this month")) . "<br>";
//first day of this month

$firstDayPrevMonth = date("Y-n-j", strtotime("first day of previous month"));
$lastDayPrevMonth = date("Y-n-j", strtotime("last day of previous month"));

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

        #purchase_data_by_date {
            margin: 20px;
            margin-bottom: 40px;
        }

        .business-stats>div {
            margin: 20px;
            margin-bottom: 40px;
        }

        .business-stats>div>h2 {
            background-color: #1abc9c;
            color: white;
        }
    </style>
</head>

<body>

    <?php include_once "nav-bar.php" ?>


    <div class="business-stats">

        <div id="purchase_data_by_date">
            <h2>Purchased Details by Date</h2>
            <form action="" method="post" onsubmit="return validateDateRange()">
                <table>
                    <tr>
                        <td>
                            From: <input type="date" value="<?php echo $start_date; ?>" name="start_date" id="start_date">
                            <span class="red_message" id="err_start_date"> <?php echo $err_start_date; ?></span>
                            <br>
                        </td>
                        <td>
                            To: <input type="date" value="<?php echo $end_date; ?>" name="end_date" id="end_date">
                            <span class="red_message" id="err_end_date"> <?php echo $err_end_date; ?></span>
                            <br>
                        </td>
                        <td>
                            <input type="checkbox" name="paid" id="" value="paid"> Paid &nbsp; <input type="checkbox" name="unpaid" id="" value="unpaid"> Unpaid
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="submit" name="get_purchase_data" value="Get Purchased Data">

                        </td>
                    </tr>
                </table>

            </form>


            <div id="purchase-table">
                <table>

                    <?php
                    if (isset($_POST['get_purchase_data']) && $validCount >= 2) {
                        if (count($purchaseDetails) > 0) {
                            echo "<tr>";
                            echo "<th>ID</th>";
                            echo "<th>Amount</th>";
                            echo "<th>Status</th>";
                            echo "<th>Planner</th>";
                            echo "<th>Date</th>";
                            echo "</tr>";
                            foreach ($purchaseDetails as $purchase) {
                                echo "<tr>";
                                echo "<td>" . $purchase['purchased_id'] . "</td>";
                                echo "<td>" . $purchase['service_price'] . "</td>";
                                echo "<td>" . $purchase['status(paid/unpaid)'] . "</td>";
                                echo "<td>" . $purchase['planner_username'] . "</td>";
                                echo "<td>" . $purchase['purchased_date'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<h4 class=''>No Data Found</h4>";
                        }
                    }
                    ?>
                </table>
            </div>
        </div>

        <div class="payment-info">
            <h2>Total OverView</h2>
            <table>
                <tr>

                    <th>Total Unpaid Payment</th>
                    <th>Total Paid And Unpaid Payment</th>
                    <th>Total Paid Payment</th>
                </tr>
                <tr>
                    <td>
                        <?php
                        $unpaidAmountSum = getUnPaidAmountSum();
                        echo $unpaidAmountSum[0]['unpaidAmountSum'] . " Taka</p>"
                        ?>
                    </td>
                    <td>
                        <?php
                        $amountSum = getAmountSum();

                        echo $amountSum[0]['amountSum'] . " Taka</p>"
                        ?>
                    </td>
                    <td>
                        <?php
                        $paidAmountSum = getPaidAmountSum();

                        echo $paidAmountSum[0]['paidAmountSum'] . " Taka</p>"
                        ?>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        Profit 10% of Paid Payment =
                    </th>
                    <td>
                        <?php
                        $paidAmountSum = getPaidAmountSum();

                        echo $paidAmountSum[0]['paidAmountSum'] * 0.10 . " Taka</p>"
                        ?>
                    </td>
                </tr>
            </table>
            <h2></h2>

            <h2></h2>



        </div>

        <div id="this_month_earning">
            <h2>This Month Earning and Payments</h2>
            <?php
            $thismonth = getPurchaseDetailsByDate($firstDayThisMonth, $lastDayThisMonth, "paid");
            if (count($thismonth) == 0) {
                echo "<p>No Paid Event Purchased Yet.</p>";
            } else {

                echo "<p>This Month Total Payment" . $thismonth[0][0] . "</p>";
            }
            ?>
        </div>
        <div id="prev_month_earning">
            <h2>Previous Month Earning and Payment</h2>
            <?php
            $prevMonth = getPurchaseDetailsByDate($firstDayPrevMonth, $lastDayPrevMonth, "paid");
            if (count($prevMonth) == 0) {
                echo "<p>No Payment Complete Yet.</p>";
            } else {
                $prevEarning = 0;
                echo "<table>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Planner</th>";
                echo "<th>Amount(Taka)</th>";
                echo "</tr>";
                foreach ($prevMonth as $purchase) {
                    echo "<tr>";
                    echo "<td>" . $purchase['purchased_id'] . "</td>";
                    echo "<td>" . $purchase['planner_username'] . "</td>";
                    echo "<td>" . $purchase['service_price'] . "</td>";
                    $prevEarning += $purchase['service_price'];
                    echo "</tr>";
                }
                echo "<tr>";
                echo "<th colspan='2'>Total Amount</th>";
                echo "<th>$prevEarning</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<th colspan='2'>Our Profit [10%] of Payment</th>";
                echo "<th>" . $prevEarning * 0.10 . "</th>";
                echo "</tr>";
                echo "</table>";
            }
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
    <script src="js/common-function.js"></script>

    <script>
        function validateDateRange() {
            var start_date = getElement("start_date").value;
            console.log(start_date);
            var end_date = getElement("end_date").value;
            var validCount = 0;
            if (start_date == "") {
                getElement("err_start_date").innerHTML = " Start Date Missing";
            } else {
                getElement("err_start_date").innerHTML = "";
                validCount++;
            }
            if (end_date == "") {
                getElement("err_end_date").innerHTML = "End Date Missing";
            } else {
                getElement("err_end_date").innerHTML = "";
                validCount++;
            }

            if (validCount == 2) {
                return true;
            }
            return false;

        }
    </script>
</body>

</html>