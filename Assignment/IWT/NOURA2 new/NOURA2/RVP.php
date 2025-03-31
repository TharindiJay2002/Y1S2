<?php
require 'config.php';
session_start();



if (isset($_POST['uid'], $_POST['rTitle'], $_POST['descrip'], $_POST['rate'])) {
$userID = $_POST['uid'];
$reviewTitle = $_POST["rTitle"];
$description = $_POST["descrip"];
$rating = $_POST["rate"];

$sql="INSERT INTO review(User_ID,Review_Title,Description,Rating) VALUES ('$userID' , '$reviewTitle' , '$description' , '$rating')"; 

if($conn->query($sql))
{
    echo "Insert Succesfull";
}
else
{
    echo "Error".$con->error;
}
}
?>


<html>
    <head>

    <link rel="stylesheet" href="Lstyle.css">

    </head>

    <body>
        <fieldset>
            <legend> <b> Review </b> </legend>
            <form method="post" action="">
            User ID : <input type="text" name='uid'> <br><br>
            Review Title : <input type="text" name="rTitle"> <br><br>
            Description : <input type="text" name="descrip"> <br><br>
            Rating : <input type="text" name="rate"> <br><br>
            <input type="submit"><input type="reset">
        
        </form>
        </fieldset>


        <form method="post" action="update.php">
            User ID : <input type="text" name='uid'> <br><br>
            Review Title : <input type="text" name="rTitle"> <br><br>
            Description : <input type="text" name="descrip"> <br><br>
            Rating : <input type="text" name="rate"> <br><br>
            <input type="submit" value="Update" name="submit">
        
        </form>

    </body>
</html>