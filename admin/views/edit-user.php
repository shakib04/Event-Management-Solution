<?php
require_once "session-code.php";
require_once "../controller/UserController.php";
require_once "../controller/PlannerController.php";



if (!isset($_GET['username'])) {
    //header("location:dashboard-admin.php");
    echo "<h1>Username is Missing</h1>";
    die();
}

$userData = getUserDetails($_GET['username']);
if (count($userData) == 0) {
    echo "<h1>User Not Found</h1>";
    die();
}
$columns = $userData;

require_once "../controller/ProfileController.php";



$type = $userData[0]['type'];
require_once "nav-bar.php";
?>
<style>
    td>span {
        color: red;
        font-weight: 600;
    }
</style>
<form action="" method="POST" onsubmit="return profileValidation()">
    <h4>Edit Profile of <?php echo $_GET['username']; ?></h4>
    <table>
        <tr>
            <td>Full Name</td>
            <td>
                <input type="text" name="fullname" id="fullname" value="<?php echo $fullname; ?>"> <?php echo $err_fullname ?>
                <span id="erName"></span>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="text" name="email" value="<?php echo $email; ?>" id="email"> <?php echo $err_email ?>
                <span id="erEmail"></span>
            </td>
        </tr>
        <tr>
            <td>Gender <?php echo $err_gender ?></td>
            <td>
                <input type="radio" name="gender" id="" value="male" <?php if ($gender == "male") {
                                                                            echo "checked";
                                                                        } ?>> Male
                <input type="radio" name="gender" id="" value="female" <?php if ($gender == "female") {
                                                                            echo "checked";
                                                                        } ?>> Female
                <input type="radio" name="gender" id="" value="others" <?php if ($gender == "others") {
                                                                            echo "checked";
                                                                        } ?>> Others
            </td>
        </tr>

        <tr>
            <td>Phone Number</td>
            <td>
                <input type="text" name="contact" id="contact" value="<?php echo $contact; ?>"> <?php echo $err_contact; ?>
                <span id="erContact"></span>
            </td>
        </tr>

        <tr>
            <td>Local Address</td>
            <td>
                <textarea name="address" id="address"> <?php echo $address; ?></textarea> <?php echo $err_address ?>
                <span id="erAddress"></span>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Save">
            </td>
        </tr>
    </table>
</form>

<script src="js/edit-user-validation.js"></script>