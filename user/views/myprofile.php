  <?php
    require_once "session-code.php";
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
      <?php include "header.php"; ?>

      <div>
          <h2>My Profile Details</h2>
          <form action=" " method="post">
              <table>

                  <table class="center">
                      <tr>
                          <td>Username:</td>
                          <td><input type="text" value="<?php echo $_SESSION['username']; ?>" placeholder="Username" name="username"></td>
                          <td><span style="color:red;">*<?php echo $err_username; ?></span></td>
                      </tr>
                      <tr>
                          <td>Full Name:</td>
                          <td><input type="text" value="<?php echo $Full_Name; ?>" placeholder="Fullname" name="Full_Name"></td>
                          <td><span style="color:red;">*<?php echo $err_Full_Name; ?></span></td>
                      </tr>
                      <tr>
                          <td>Email:</td>
                          <td><input type="text" value="<?php echo $email; ?>" placeholder="Email" name="email"></td>
                          <td><span style="color:red;">*<?php echo $err_email; ?></span></td>
                      </tr>

                      <tr>
                          <td>Phone Number:</td>
                          <td><input type="text" value="<?php echo $phone_number; ?>" placeholder="Phone Number" name="phone_number"></td>
                          <td><span style="color:red;">*<?php echo $err_phone_number; ?></span></td>
                      </tr>

                      <tr>
                          <td>Address</td>
                          <td><input type="text" value="<?php echo $full_address; ?>" placeholder="Address" name="full_address"></td>
                          <td><span style="color:red;">*<?php echo $err_full_address; ?></span></td>
                      </tr>

                      <tr>

                          <td colspan="2"><input type="submit" name="OK" value="OK"></td>
                      </tr>

                      <tr>

                          <td colspan="2"><button onclick="loadEditProfile()">Edit Profile </button></td>
                      </tr>



                  </table>
          </form>
          <div id="output">

          </div>
          <script>
              function loadEditProfile() {
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                      if (this.readyState == 4 && this.status == 200) {
                          document.getElementById("output").innerHTML = this.responseText;
                      }
                  };
                  xhttp.open("GET", "myedit_profile.php", true);
                  xhttp.send();
              }
          </script>



  </body>

  </html>