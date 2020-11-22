<?php



$admins = simplexml_load_file("data.xml");
$admin = $admins->user;

foreach ($admin as $user) {
    if ($user->username == $_SESSION['username']) {
        $fullname = $user->fname;
        $email = $user->email;
        $gender = $user->gender;
        $contact = $user->contact;
        $address = $user->address;
        $type = $user->type;
        break;
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
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

        .my-profile {
            margin: 30px auto;
            width: 800px;
        }

        .active-my-profile {
            background-color: aliceblue;
        }
    </style>
</head>

<body>
    <?php include_once "common-codes/nav-bar.php" ?>
    <div class="my-profile">
        <h2>My Profile Details</h2>
        <table>
            <tr>
                <td>username</td>
                <td><?php echo $_SESSION['username']; ?></td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td><?php echo $fullname; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $email; ?></td>
            </tr>

            <tr>
                <td>User Type</td>
                <td><?php echo $type; ?></td>
            </tr>

            <tr>
                <td>Gender</td>
                <td><?php echo $gender; ?></td>
            </tr>


            <tr>
                <td>Phone Number:</td>
                <td><?php echo $contact; ?></td>
            </tr>

            <tr>
                <td>Address</td>
                <td><?php echo $address; ?></td>
            </tr>

            <tr>

                <td colspan="2"><a href="edit-profile.php">Edit Profile</a></td>
            </tr>
        </table>
    </div>
</body>

</html>