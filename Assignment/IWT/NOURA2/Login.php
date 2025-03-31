
<?php

include 'config.php';


if(isset($_POST['submit'])){

   $email =$_POST['email'];
   $pass = md5($_POST['password']);


   $select = mysqli_query($conn, "SELECT * FROM users WHERE Email = '$email' && Password = '$pass' ");
   if(mysqli_num_rows($select) > 0){
      session_start();
      $row = mysqli_fetch_assoc($select);
      $_SESSION['usertype']=$row['UserType'];

      if($row['UserType'] == 'admin'){

         $_SESSION['user_id'] = $row['id'];
         $_SESSION['username'] = $row['FirstName'];
         header('location:AdminHome.php');


      }elseif($row['UserType'] == 'designer'){

         $_SESSION['user_id'] = $row['id'];
         $_SESSION['username'] = $row['FirstName'];
         header('location:Lakna_Designer.php');


      }elseif($row['UserType'] == 'user'){

         $_SESSION['user_id'] = $row['id'];
         $_SESSION['username'] = $row['FirstName'];
         header('location:home.php');

      }



      
   }else{
      $error[] = 'incorrect email or password!';
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="Lstyle.css">

</head>
<body>
   
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="Register.php">register now</a></p>
   </form>

</div>

</body>
</html>
