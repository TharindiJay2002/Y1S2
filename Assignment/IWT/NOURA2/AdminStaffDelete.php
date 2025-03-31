<?php
// Include the configuration file
include "config.php";
// Start the session
session_start();


// Get the ID from the URL
$id = $_GET['id'];

// Delete record from the database based on ID
$query = " DELETE FROM users WHERE id = '$id' ";
$data = mysqli_query($conn,$query);

// Check if deletion was successful
if($data)
{
      // If successful, display message and redirect to AdminStaffView.php
    echo "Record Deleted";
    header('Location:AdminStaffView.php');
}
else{
       // If deletion failed, display error message
    echo "Failed To Delete";
}

?>
