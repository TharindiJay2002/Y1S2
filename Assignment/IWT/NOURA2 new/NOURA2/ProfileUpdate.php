<?php
include 'header.php';
include 'config.php';
$user_id = $_SESSION['user_id'];




if(isset($_POST['update_profile'])){
    $update_email = $_POST['update_email'];
    $update_firstname = $_POST['update_firstname'];
    $update_lastname =  $_POST['update_lastname'];
   
   mysqli_query($conn, " UPDATE users SET FirstName = '$update_firstname', LastName = '$update_lastname' , Email = '$update_email' WHERE id = '$user_id'") or die('query failed');

  
  
  
  
   $old_pass = $_POST['old_pass'];
   $update_pass = md5($_POST['update_pass']);
   $new_pass = md5($_POST['new_pass']);
   $confirm_pass = md5($_POST['confirm_pass']);


   
   
   
   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[]="old password not matched!";

      }elseif($new_pass != $confirm_pass){
         $message[]="confirm password not matched!";
         
      }else{
         mysqli_query($conn, "UPDATE users SET Password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
         $error[]="password updated successfully!";
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="Lstyle.css">

</head>
<body>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM users WHERE id = '$user_id' ") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
     
      <div class="flex">
         <div class="inputBox">
            <span>First name :</span>
            <input type="text" name="update_firstname" value="<?php echo $fetch['FirstName']; ?>" class="box">

            <span>Last name :</span>
            <input type="text" name="update_lastname" value="<?php echo $fetch['LastName']; ?>" class="box">
            
            <span>your email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['Email']; ?>" class="box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['Password']; ?>">
            <span>old password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>new password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>
      <input type="submit" value="update profile" name="update_profile" class="btn">
      <a href="Profile.php" class="delete-btn">Go Back</a>
   </form>

</div>

</body>
</html>