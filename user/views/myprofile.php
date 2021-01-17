  <?php
    require_once "session-code.php";
    require_once "../controllers/UserController.php";
    $columns = getUserDetails($_SESSION['username']);
    require_once "../controllers/php_codes/myprofile_validation.php";
    ?>



  <html>

  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Profile</title>
      <style>
          table,
          th,
          td {
              border: 1px solid black;
              border-collapse: collapse;
              padding: 15px;
              text-align: center;
          }

          tr:nth-child(odd) {
              background-color: aliceblue;
          }

          tr:nth-last-child(even) {
              background-color: whitesmoke;
          }

          table.center {
              margin-left: auto;
              margin-right: auto;
          }

          body {
              text-align: center;
          }
      </style>

  </head>

  <body style="text-align:center;">
      <?php include "mypagehead.php"; ?>

      <div>
          <h2>My Profile Details</h2>


          <table class="center">
              <tr>
                  <td>Username:</td>
                  <td>
                      <input type="text" id="username" value="<?php echo $_SESSION['username']; ?>" placeholder="Username" name="username"><span id="err_username" style="color:red;"></span>
                      <span style="color:red;"><?php echo $err_username; ?></span>
                  </td>
              </tr>
              <tr>
                  <td>Full Name:</td>
                  <td>
                      <input type="text" id="fullname" value="<?php echo $Full_Name; ?>" placeholder="Fullname" name="Full_Name"><span id="err_fullname" style="color:red;"></span>
                      <span style="color:red;"><?php echo $err_Full_Name; ?></span>
                  </td>
              </tr>
              <tr>
                  <td>Email:</td>
                  <td><input type="text" id="email" value="<?php echo $email; ?>" placeholder="Email" name="email"><span id="err_email" style="color:red;"></span>
                      <span style="color:red;"><?php echo $err_email; ?></span>
                  </td>
              </tr>

              <tr>
                  <td>Phone Number:</td>
                  <td><input type="text" id="phone" value="<?php echo $phone_number; ?>" placeholder="Phone Number" name="phone_number"><span id="err_phone" style="color:red;"></span>
                      <span style="color:red;"><?php echo $err_phone_number; ?></span>
                  </td>
              </tr>

              <tr>
                  <td>Address</td>
                  <td><input type="text" id="address" value="<?php echo $full_address; ?>" placeholder="Address" name="full_address"><span id="err_address" style="color:red;"></span>
                      <span style="color:red;"><?php echo $err_full_address; ?></span>
                  </td>
              </tr>

              <tr>

                  <td colspan="2"><a href="myedit_profile.php">Edit Profile</a></td>
              </tr>



          </table>



          <script src="../scripts/profilevalidation.js"></script>

  </body>

  </html>