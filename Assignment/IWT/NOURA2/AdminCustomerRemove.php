<?php
include "config.php";
session_start();
$cid=$_GET['id'];

if (isset($_GET['id'])){
    

    $servername ="localhost";
    $username="root";
    $password="";
    $database="user_info";


    $connection = new mysqli($servername, $username, $password, $database);

    $query = " DELETE FROM users WHERE id = '$cid' ";
    $data = mysqli_query($conn,$query);

}

header("location:AdminCustomerRead.php");
exit;

?>