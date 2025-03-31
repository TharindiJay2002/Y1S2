<?php
include "config.php";
session_start();

$id = $_SESSION['user_id'];

$query = " DELETE FROM users WHERE id = '$id' ";
$data = mysqli_query($conn,$query);

if($data)
{
    echo "Record Deleted";
    session_unset();
    session_destroy();
    header('Location:Login.php');
}
else{
    echo "Failed To Delete";
}

?>
