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
                 <td>
                     <input type="text" onfocusout="checkDuplicateUser(this)" value="<?php echo $username; ?>" name="username" id=""><?php echo $err_username; ?>
                     <p id="duplicate-username"></p>
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
     <script>

     </script>
 </div>