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
    <div class="our-users-reviews">
        <h3>Some Users Reviews about ourself</h3>
        <ul>
            <li>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum eaque dicta voluptate a voluptatem
                    mollitia nobis. Unde quos id, iusto tempore qui aut quo rem distinctio facere autem reprehenderit
                    excepturi culpa cum! Deserunt distinctio dolore ut ducimus illum quae in assumenda aut? Dolor
                    consectetur porro voluptas, dolores officia tempore quam!

                    <blockquote>-SSSSS</blockquote>
                </p>
            </li>

            <li>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et explicabo quia in repudiandae. Ratione
                    tenetur, ullam, porro temporibus dolores sit id corporis illo cumque possimus aliquid qui sunt nobis
                    quia repellendus perspiciatis obcaecati voluptas dolorem aperiam deleniti magni architecto? Odit
                    laboriosam aperiam reiciendis adipisci voluptatibus ipsum autem quae. Porro, nihil!
                    <blockquote>-RRRR</blockquote>
                </p>
            </li>
        </ul>
    </div>

    <div id="login">
        <?php require_once "php-codes/login-validation.php" ?>
        <form action="" method="post">
            <div class="login-box">Login</div>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" id=""><?php echo $err_login_username; ?></td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="text" name="password" id=""> <?php echo $err_login_password; ?>
                    </td>
                </tr>

                <tr>
                    <td><input type="reset" name="" id=""></td>
                    <td><input type="submit" id="" name="login" value="Login"></td>
                </tr>
            </table>
            <?php echo $invalidCred; ?>
        </form>
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


        function checkDuplicateUser(usernameInput) {
            //alert("dd");
            var username = usernameInput.value;

            if (username.length >= 5 && username.length <= 10) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("duplicate-username").innerHTML = this.responseText;
                        console.log(this.responseText);
                    }
                };

                xhr.open("GET", "php-codes/registration-validation.php?username=" + username, true);
                xhr.send();
            } else {
                document.getElementById("duplicate-username").innerHTML = '';
            }
        }
    </script>
</body>

</html>