<?php
require_once "php-codes/session-code.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .demo-event-pictures {}

        .demo-event-pictures img {
            width: 300px;
            height: 400px;
            margin: 10px;
        }

        .our-users-reviews ul li {
            border: 1px solid black;
            text-align: justify;
            padding: 10px;
            line-height: 1.5;
        }

        .our-users-reviews ul li blockquote {
            font-weight: 700;
        }

        #login,
        #registration {
            border: 2px solid black;
            padding: 25px;
        }

        .error-message {
            color: red;
            font-weight: 600;
        }

        body {
            /* background-image: linear-gradient(to left bottom, #dfe6e9, #dff9fb); */
        }
    </style>
</head>

<body>
    <?php include_once "page-top.php"; ?>
    <div class="our-events-pics">
        <!-- <h2>Here Our Some Pictures of Successful Events by Our Top Planner</h2> -->
        <div class="demo-event-pictures">
            <!-- <img src="event-demo-images/birthday-1.jpg" alt="">
            <img src="event-demo-images/birthday-2.jpg" alt="">
            <img src="event-demo-images/cooking.jpg" alt="">
            <img src="event-demo-images/wedding-reception-design.jpg" alt="">
            <img src="event-demo-images/wedding-2.jpg" alt="">
            <img src="event-demo-images/corporate-1jpg.jpg" alt="">
            <img src="event-demo-images/corporate-2.jpg" alt=""> -->
        </div>
    </div>


    <div id="login">
        <?php require_once "php-codes/login-validation.php" ?>
        <form action="" method="post" onsubmit="return loginValidation()">
            <h2 class="login-box">Login</h2>
            <table>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" id="lg_username"><?php echo $err_login_username; ?>
                        <span id="err_lg_username"></span>
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="text" name="password" id="lg_password"> <?php echo $err_login_password; ?>
                        <span id="err_lg_password"></span>
                    </td>
                </tr>

                <tr>
                    <td><input type="reset" name="" id=""></td>
                    <td><input type="submit" id="" name="login" value="Login"></td>
                </tr>
            </table>
            <?php echo $invalidCred; ?>
        </form>
        <script src="js/common-function.js"></script>
        <script src="js/login-js-validation.js"></script>
    </div>

    <div id="reg-part">
        <?php require_once "registration.php"; ?>
    </div>



    <?php

    //require_once "footer.php";
    ?>


    <script>
        function loadRegistration() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.status == 200 && this.readyState == 4) {
                    document.getElementById("reg-part").innerHTML = this.responseText;
                }
            };
            xhr.open("GET", "registration.php", true);
            xhr.send();
        }
    </script>
</body>

</html>