


<?php

//profile-pic validation
$err_Profile_Pic = "";
if (isset($_POST['save-pro-pic'])) {

    if (empty($_FILES['Propic']['name'])) {
        $err_Profile_Pic = "<span style='color:red; font-weight:bold;'>Select A File First </span>";
    } else {
        $filename = $_FILES['Propic']['name'];
        //echo $file_type = $_FILES['Propic']['type'];
        $file_type = strtolower(pathinfo(basename($filename), PATHINFO_EXTENSION));
        $dir = "profiles/images/";
        $customName = $_SESSION['username'] . "-profile-pic";
        $target_file = $dir . $customName . "." . $file_type;
        $file_tmp_name = $_FILES['Propic']['tmp_name'];


        if (move_uploaded_file($file_tmp_name, $target_file)) {
            $query = "update all_users_profile set profile_pic = '$target_file' where username = '" . $_SESSION['username'] . "';";
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
