<?php
include 'config.php';
include 'header.php';


if(isset($_SESSION['user_id'])) {
    echo "Your session is running " . $_SESSION['user_id'];
}
else{
    echo "<script> alert('Your session is not running') </script> ";
};

$id = $_SESSION['user_id'];
$user = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="Lstyle.css">

</head>
<body>
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
            echo '<img src="images/avatar.jpg">';
         }
      ?>

      <h3><?php echo $user; ?></h3>
      <div class="flex">
         <div class="inputBox">
            <span>First name </span>
            <h4 class="box"><?php echo $fetch['FirstName']; ?> </h4>

            <span>Last name </span>
            <h4 class="box"><?php echo $fetch['LastName']; ?> </h4>

            <span>Gender </span>
            <h4 class="box"><?php echo $fetch['Gender']; ?> </h4>

            <span>Mobile Number </span>
            <h4 class="box"><?php echo $fetch['Mobile']; ?> </h4>

            <span>Address </span>
            <h4 class="box"><?php echo $fetch['Address']; ?></h4>
            
            <span>your email </span>
            <h4 class="box"><?php echo $fetch['Email']; ?> </h4>
         
         </div>
      </div>

      <a href="ProfileUpdate.php" class="btn">Update Profile</a>
      <a href="Logout.php?logout=<?php echo $id; ?>" class="delete-btn">Logout</a>
      <a href="ProfileDelete.php?id =<?php echo $id; ?>" class="delete-button" onclick='return checkdelete()'>Delete Account</a>

      <p>new <a href="Login.php">login</a> or <a href="Register.php">register</a></p>
   </div>

</div>





<?   //Java Script  ?>

<script src=newuser.js></script>

</body>
</html>


