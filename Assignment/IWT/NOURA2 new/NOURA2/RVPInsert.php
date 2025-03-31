<?php
  include_once 'header.php';
?>

<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $title = $_POST['Title'];
   $desc = $_POST['Desc'];
   $rating = $_POST['rate'];

         $insert = "INSERT INTO review(Name,ReviewTitle,Description , Rating ) VALUES('$name','$title','$desc','$rating')";
         mysqli_query($conn, $insert);
         $message[] = 'Reviewed successfully!';
         header('location:RVPRead.php');
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
      <h3>Review Us</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter your name"><br><br>

      <input type="text" name="Title" required placeholder="Enter your review title"><br><br>

      <input type="text" name="Desc" required placeholder="Enter your description"><br><br>

	  <input type ="value" name="rate" required placeholder="Rate us with 1 to 5" min ="1" max = "5"><br><br><br>

		
      <input type="submit" name="submit" value="submit" class="form-btn">
     
   </form>

</div>

</body>
</html>