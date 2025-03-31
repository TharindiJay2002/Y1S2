<?php
include 'header.php';
require 'config.php';
session_start();
$name = $_SESSION['username'];
$userID=$_GET['id'];

if(isset($_POST['submit']))
{
    $username = $_POST["name"];

    if($username==$name)
    {
        $query = "DELETE FROM review WHERE uid = '$userID' ";
        $data = mysqli_query($conn,$query);

        if($data)
        {   
            echo "Record Deleted";
            header('Location:RVPRead.php');

        }
        else
        {

            echo "Failed to Delete";

        }
    }
}
?>

<html>
    <head>
       <link rel="stylesheet" href="RVPreview.css">
    </head>

    <body>
        <h3>Confirm Your Review and Delete</h3>
        <form method="post" action=""> 
        <div class="inputbox">
            User Name : <input type="text" name='name'> <br><br>
            <input type="submit" value="Delete" name="submit">
         </div>
        </form>

    </body>
</html>

<style>
    /* RVPreview.css */
.inputbox {
    margin-bottom: 100px;
    margin-left:550px;
    margin-top:275px;
    font-size: 20px;
    font-weight: bold;
    
}

label {
    display: inline-block;
    width: 600px; /* Adjust as needed */
    font-weight: bold;
}

input[type="text"], input[type="submit"] {
    padding: 5px;
    font-size: 20px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

input[type="submit"] {
    background-color: #ff6347; /* Adjust color as needed */
    color: white;
    cursor: pointer;
    margin-left:150px;
}

input[type="submit"]:hover {
    background-color: #ff7f50; /* Adjust color as needed */
}

h3 {
    color: #333;
}

</style>
