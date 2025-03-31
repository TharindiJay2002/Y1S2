<?php
session_start();
$id= $_GET['id'];
$name=$_SESSION['username'];
require 'config.php';
include 'header.php';

if(isset($_POST['submit']))
{
    $userID = $_POST["uid"];
    $username = $_POST["name"];
    $reviewTitle = $_POST["Title"];
    $description = $_POST["desc"];
    $rating = $_POST["rate"];

    if($username==$name)
    {
      $sql="UPDATE review set Name='$username', ReviewTitle='$reviewTitle', Description='$description',Rating='$rating' WHERE uid='$userID' ";
       
        if($conn->query($sql))
        {
            echo "Updated";
            header('Location:RVPread.php');   
        }
        else
        {
            echo "Not Updated";
        }
    }else{
         $error="You cannot Update another review please user your user name";
         header('Location:RVPupdate.php');
        }
}
?> 

<html>
    <head>
       <link rel="stylesheet" href="RVPupdate.css">
    </head>

    <body>

    <?php
      $select = mysqli_query($conn, "SELECT * FROM review WHERE uid = '$id' ") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
     ?>
      
        <form method="post" action=""> 
        <div class="inputbox">
            User ID : <input type="text" name='uid' value="<?php echo $fetch['uid']; ?>"> <br><br>
            User Name : <input type="text" name='name' value="<?php echo $fetch['Name']; ?>"> <br><br>
            Review Title : <input type="text" name="Title" value="<?php echo $fetch['ReviewTitle']; ?>"> <br><br>
            Description : <input type="text"  name="desc" value="<?php echo $fetch['Description']; ?>"> <br><br>
            Rating : <input type="text" name="rate" value="<?php echo $fetch['Rating']; ?>"> <br><br>
            <input type="submit" value="Update" name="submit">
         </div>
        </form>

    </body>
</html>