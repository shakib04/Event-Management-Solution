


<?php

//profile-pic validation
$err_Profile_Pic = "";

$validProPic = 0;

if (isset($_POST['save-pro-pic'])) {

    $fileType = strtolower($_FILES['Propic']['type']);

    //check file selected or not

    if (empty($_FILES['Propic']['name'])) {
        $err_Profile_Pic = "<span style='color:red; font-weight:bold;'>Select A File First </span>";
    } elseif ($fileType != "image/jpeg" and $fileType != "image/png" and $fileType != "image/jpg") {
        $err_Profile_Pic = "<span style='color:red; font-weight:bold;'>File Type Not Support </span>";
    } elseif ($_FILES['Propic']['size'] > 5242880) {
        $err_Profile_Pic = "<span style='color:red; font-weight:bold;'>Max File Size is 5MB. Your File Size is " . number_format($_FILES['Propic']['size'] / (1024 * 1024), 0) . " MB</span>";
    } else {
        $filename = $_FILES['Propic']['name'];
        //echo $file_type = $_FILES['Propic']['type'];
        $file_type = strtolower(pathinfo(basename($filename), PATHINFO_EXTENSION));
        $dir = "profiles/images/";
        $customName = $_SESSION['username'] . "-profile-pic";
        $target_file = $dir . $customName . "." . $file_type;
        $file_tmp_name = $_FILES['Propic']['tmp_name'];


        if (move_uploaded_file($file_tmp_name, $target_file)) {
            echo $query = "update all_registered_users set profile_pic = '$target_file' where username = '" . $_SESSION['username'] . "';";
            if (execute($query)) {
                $err_Profile_Pic = "<span style='color:green; font-weight:bold;'>Succussfully Upload </span>";
            } else {
                $err_Profile_Pic = "<span style='color:red; font-weight:bold;'>Failed to Upload </span>";
            }
        } else {
            $err_Profile_Pic = "<span style='color:red; font-weight:bold;'>Failed to Upload </span>";
        }
    }
}
