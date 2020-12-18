<style>
    td>span {
        color: red;
        font-weight: 600;
    }

    td {
        padding: 7px 0;
    }

    .message-btn {
        color: aliceblue;
        font-weight: bold;
        display: inline-block;
        width: 130px;
        padding: 10px;
        border-radius: 6px;
    }

    .succuess {
        background-color: green;
    }

    .failed {
        background-color: red;
    }
</style>


<div id="registration">
    <?php require_once "php-codes/registration-validation.php" ?>
    <form action="" method="post" onsubmit="return regValidation()">
        <h2>Welcome to Registration</h2>
        <table>
            <tr>
                <td>Full Name: </td>
                <td>
                    <input type="text" value="<?php echo $fullname; ?>" name="fullname" id="fullname"><?php echo $err_fullname; ?>
                    <span id="erName"></span>
                </td>
            </tr>

            <tr>
                <td>Username</td>
                <td>
                    <p id="duplicate-username"></p>
                    <input type="text" onfocusout="checkDuplicateUser(this)" value="<?php echo $username; ?>" name="username" id="username"><?php echo $err_username; ?>

                    <span id="erUsername"></span>
                </td>

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
                    <input type="text" value="<?php echo $password; ?>" name="password" id="password"> <?php echo $err_password; ?>
                    <span id="erPassword"></span>
                </td>
            </tr>


            <tr>
                <td>Confirm Password</td>
                <td>
                    <input type="text" value="<?php echo $cfpassword; ?>" name="cfpassword" id="cfpassword"> <?php echo $err_cfpassword; ?>
                    <span id="ercfpassword"></span>
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
                <td>
                    <input type="text" value="<?php echo $email; ?>" name="email" id="email"><?php echo $err_email; ?>
                    <span id="erEmail"></span>
                </td>
            </tr>

            <tr>
                <td>Contact Number: </td>
                <td>
                    <input type="number" value="<?php echo $phoneNumber; ?>" name="contactNumber" id="contact"><?php echo $err_phoneNumber; ?>
                    <span id="erContact"></span>
                </td>
            </tr>

            <tr>
                <td>Address: </td>
                <td>
                    <textarea name="address" id="address" cols="30" rows="10" placeholder="Write Your Local Address (Maximum 200 Charcters)"><?php echo $address; ?></textarea>
                    <?php echo $err_address; ?>
                    <span id="erAddress"></span>
                </td>
            </tr>

            <tr>
                <td><input type="reset" name="" id=""></td>
                <td><input type="submit" id="" name="register" value="Register"></td>
            </tr>
        </table>
    </form>
    <script>

    </script>

    <script src="js/reg-js-validation.js"></script>
</div>