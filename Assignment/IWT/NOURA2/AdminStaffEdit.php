<?php
// Include AdminHeader.php and config.php files
include 'AdminHeader.php';
include 'config.php';

// Get the ID from the URL
$id=$_GET["id"];

// Check if the update_profile form is submitted
if(isset($_POST['update_profile'])){

     // Retrieve form data
    $update_email =  $_POST['update_email'];
    $update_firstname = $_POST['update_firstname'];
    $update_lastname = $_POST['update_lastname'];
   
     // Update user profile information in the database
   mysqli_query($conn, " UPDATE users SET FirstName = '$update_firstname', LastName = '$update_lastname' , Email = '$update_email' WHERE id = '$id'") or die('query failed');   

   // Retrieve password-related form data
   $old_pass = $_POST['old_pass'];
   $update_pass =md5($_POST['update_pass']);
   $new_pass = md5($_POST['new_pass']);
   $confirm_pass = md5($_POST['confirm_pass']);

    // Check if password fields are not empty
   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){

       // Check if old password matches the database
      if($update_pass != $old_pass){
         $message ="old password not matched!";

      }elseif($new_pass != $confirm_pass){
         $message ="confirm password not matched!";
         
      }else{

         // Update password in the database
         mysqli_query($conn, "UPDATE users SET Password = '$confirm_pass' WHERE id = '$id'") or die('query failed');
         $message ="password updated successfully!";
         
      }
   }

   $message =" updated successfully!";
   header('Location:AdminStaffView.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Member</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="AdminForm.css">

</head>
<body>
   
<div class="update-profile">

   <?php
      
        // Fetch user data based on ID
      $select = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id' ") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

     <!-- Form to update user profile -->
   <form action="" method="post" enctype="multipart/form-data">
     
      <div class="flex">
         <div class="inputBox">
            <!-- Input fields for first name, last name, and email -->
            <span>First name :</span>
            <input type="text" name="update_firstname" value="<?php echo $fetch['FirstName']; ?>" class="box">

            <span>Last name :</span>
            <input type="text" name="update_lastname" value="<?php echo $fetch['LastName']; ?>" class="box">
            
            <span>your email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['Email']; ?>" class="box">
         </div>
         <div class="inputBox">
             <!-- Hidden input for old password -->
            <input type="hidden" name="old_pass" value="<?php echo $fetch['Password']; ?>">
             <!-- Input fields for old, new, and confirm passwords -->
            <span>old password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>new password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>
      <!-- Submit button to update profile -->
      <input type="submit" value="update profile" name="update_profile" class="btn">

      <!-- Link to go back to AdminStaffView page -->
      <a href="AdminStaffView.php" class="delete-btn">Go Back</a>
   </form>

</div>

</body>
</html>