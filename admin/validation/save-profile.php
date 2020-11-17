<?php


$fullname = $email = $gender = $contact = $address = "";


$admins = simplexml_load_file("data.xml");
$admin = $admins->admin;

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $address = $_POST['address'];

    foreach ($admin as $user) {
        if ($user->username == $_SESSION['username']) {
            $user->fname = $fullname;
            $user->email = $email;
            $user->gender = $gender;
            $user->contact = $contact;
            $user->address = $address;
            break;
        }
    }

    file_put_contents("data.xml", $admins->saveXML());
    header("location: my-profile.php");
}
