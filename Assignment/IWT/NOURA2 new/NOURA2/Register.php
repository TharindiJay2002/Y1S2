<?php
  include_once 'header.php'
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


   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist!';
   }
   else{
      
      if($pass != $cpass){
         $error[] = "confirm password not matched!";

      
      }else{
         $insert = "INSERT INTO users(FirstName, LastName, Gender, DateOfBirth, Mobile, Address, Email, Password) VALUES('$first_name','$last_name','$gender','$dob','$mobile','$address','$email','$pass')";
         mysqli_query($conn, $insert);
         $error[] = 'registered successfully!';
         header('location:Login.php');
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
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="Lstyle.css">


</head>
<body>
   
<div class="form-container" enctype="multipart/form-data">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="First" required placeholder="Enter your first name">
      <input type="text" name="Last" required placeholder="Enter your last name">
   
      
   <div class="rdio">
      <input type="radio" id="male" name="Gender" value="male">Male<br>
      <input type="radio" id="female" name="Gender" value="female">Female<br>
   </div>
      <br>

		<input type ="date" name="DOB" required placeholder="Date of birth" min ="1950-01-01" max = "2015-12-31"><br>
		<input type="text" name="Mobile" placeholder = "Mobile Number" required title ="10 digits" pattern="[0-9]{10}"><br>
      <input type="text" name="Address" required placeholder="enter your Address">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="Login.php">login now</a></p>
   </form>

</div>

</body>
</html>