<?php
include "config.php";
session_start();

$id = $_GET['id'];

$query = " DELETE FROM users WHERE id = '$id' ";
$data = mysqli_query($conn,$query);

if($data)
{
    echo "Record Deleted";
    header('Location:AdminStaffView.php');
}
else{
    echo "Failed To Delete";
}

?>
