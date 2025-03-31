<?php
  include_once 'AdminHeader.php'
?>

<?php

include_once 'config.php';

if(isset($_POST['submit'])){

   $first_name = $_POST['First'];
   $last_name = $_POST['Last'];
   $gender = $_POST['Gender'];
   $dob = $_POST['DOB'];
   $mobile = $_POST['Mobile'];
   $address = $_POST['Address'];   
   $email = $_POST['email'];
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $usertype = $_POST['Type'];


   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist!';
   }
   else{
      
      if($pass != $cpass){
         $error[] = "confirm password not matched!";

      
      }else{
         $insert = "INSERT INTO users(FirstName, LastName, Gender, DateOfBirth, Mobile, Address, Email, Password,UserType) VALUES('$first_name','$last_name','$gender','$dob','$mobile','$address','$email','$pass','$usertype')";
         mysqli_query($conn, $insert);
         $message[] = 'Added successfully!';
         header('location:AdminStaffView.php');
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
   <title>Add Members</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="AdminForm.css">


</head>
<body>
   
<div class="form-container" enctype="multipart/form-data">

   <form action="" method="post">
      <h3>Add Staff Members</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="First" required placeholder="Enter member's first name">
      <input type="text" name="Last" required placeholder="Enter member's last name">
   
      
   <div class="rdio">
      <input type="radio" id="male" name="Gender" value="male">Male<br>
      <input type="radio" id="female" name="Gender" value="female">Female<br>
   </div>
      <br>

		<input type ="date" name="DOB" required placeholder="Date of birth" min ="1950-01-01" max = "2015-12-31"><br>
		<input type="text" name="Mobile" placeholder = "Mobile Number" required title ="10 digits" pattern="[0-9]{10}"><br>
      <input type="text" name="Address" required placeholder="enter member's Address">
      <input type="email" name="email" required placeholder="enter member's email">
      <input type="password" name="password" required placeholder="enter member's password">
      <input type="password" name="cpassword" required placeholder="confirm member's password">

      <<label for="usertype"> User type </label>
      <select id="type" name="Type">
      <option value="admin">Admin</option>
      <option value="designer">Designer</option>
      
    </select>
  


      <input type="submit" name="submit" value="Add now" class="form-btn">
     
   </form>

</div>

</body>
</html>