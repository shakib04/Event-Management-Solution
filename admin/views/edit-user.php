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

<form action="" method="POST">
    <h4>Edit Profile of <?php echo $_GET['username']; ?></h4>
    <table>
        <tr>
            <td>Full Name</td>
            <td><input type="text" name="fullname" id="" value="<?php echo $fullname; ?>"> <?php echo $err_fullname ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email" value="<?php echo $email; ?>" id=""> <?php echo $err_email ?>
            </td>
        </tr>
        <tr>
            <td>Gender <?php echo $err_gender ?></td>
            <td>
                <input type="radio" name="gender" id="" value="Male" checked> Male
                <input type="radio" name="gender" id="" value="Female"> Female
            </td>
        </tr>

        <tr>
            <td>Phone Number</td>
            <td>
                <input type="text" name="contact" id="" value="<?php echo $contact; ?>"> <?php echo $err_contact; ?>
            </td>
        </tr>

        <tr>
            <td>Local Address</td>
            <td>
                <textarea name="address" id=""> <?php echo $address; ?></textarea> <?php echo $err_address ?>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Save">
            </td>
        </tr>
    </table>
</form>