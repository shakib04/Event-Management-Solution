<?php

session_start();

if (isset($_SESSION['username']) and isset($_SESSION['type'])) {

    $type = strtolower($_SESSION['type']);
    if (strtolower($_SESSION['type']) == "admin") {
        header("location:admin/dashboard-admin.php");
    } elseif ($type == "client" or $type == "user") {
        header("location:user/");
    } elseif ($type == "vendor") {
        header("location:vendor/");
    } elseif ($type == "planner") {
        header("location:eventplanner/");
    }
}

// echo "<h3> Hi,  " . $_SESSION['username'] . "</h3>";


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

    <div id="registration">
        <?php require_once "php-codes/registration-validation.php" ?>
        <form action="" method="post">
            <h2>Welcome to Registration</h2>
            <table>
                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" value="<?php echo $fullname; ?>" name="fullname" id=""><?php echo $err_fullname; ?></td>
                </tr>

                <tr>
                    <td>Username</td>
                    <td><input type="text" value="<?php echo $username; ?>" name="username" id=""><?php echo $err_username; ?></td>
                </tr>

                <tr>
                    <td>
                        I want to
                    </td>
                    <td>
                        <input type="radio" name="type" id="" checked value="1">(User) Search a Planner <br>
                        <input type="radio" name="type" id="" value="2">(Planner) Plan for People
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="text" value="<?php echo $password; ?>" name="password" id=""> <?php echo $err_password; ?>
                    </td>
                </tr>


                <tr>
                    <td>Confirm Password</td>
                    <td>
                        <input type="text" value="<?php echo $cfpassword; ?>" name="cfpassword" id=""> <?php echo $err_cfpassword; ?>
                    </td>
                </tr>


                <tr>
                    <td>Gender:
                        <?php echo $err_gender; ?>
                    </td>
                    <td>
                        <input type="radio" checked name="gender" id="" value="1">Male
                        <input type="radio" name="gender" id="" value="2">Female
                        <input type="radio" name="gender" id="" value="3">Others
                    </td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td><input type="text" value="<?php echo $email; ?>" name="email" id=""><?php echo $err_email; ?></td>
                </tr>

                <tr>
                    <td>Contact Number: </td>
                    <td><input type="number" value="<?php echo $phoneNumber; ?>" name="contactNumber" id=""><?php echo $err_phoneNumber; ?></td>
                </tr>

                <tr>
                    <td>Address: </td>
                    <td>
                        <textarea name="address" id="" cols="30" rows="10" placeholder="Write Your Local Address (Mamimum 200 Charcters)"><?php echo $address; ?></textarea>
                        <?php echo $err_address; ?>
                    </td>
                </tr>

                <tr>
                    <td><input type="reset" name="" id=""></td>
                    <td><input type="submit" id="" name="register" value="Register"></td>
                </tr>
            </table>
        </form>
    </div>



    <?php

    //require_once "footer.php";
    ?>

</body>

</html>