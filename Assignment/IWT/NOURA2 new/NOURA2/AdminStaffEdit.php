<?php
include 'AdminHeader.php';
include 'config.php';
$id = $_GET["id"];

if(isset($_POST['update_profile'])){
    $update_email = $_POST['update_email'];
    $update_firstname = $_POST['update_firstname'];
    $update_lastname = $_POST['update_lastname'];
    $update_mobile = $_POST['update_mobile'];
    $update_address = $_POST['update_address'];
    $update_post = $_POST['update_post'];

    $update_query = "UPDATE users SET FirstName = '$update_firstname', LastName = '$update_lastname', Email = '$update_email', Mobile = '$update_mobile', Address = '$update_address', UserType = '$update_post' WHERE id = '$id'";

    if(mysqli_query($conn, $update_query)){
        header('Location:AdminStaffView.php');
    } else {
        $message = "Update Failed";
        echo $message;
    }
}

$select = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'") or die('query failed');
if(mysqli_num_rows($select) > 0){
    $fetch = mysqli_fetch_assoc($select);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
    <link rel="stylesheet" href="AdminForm.css">
</head>
<body>
<div class="update-profile">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="flex">
            <div class="inputBox">
                <span>First name :</span>
                <input type="text" name="update_firstname" value="<?php echo $fetch['FirstName']; ?>" class="box">
                <span>Last name :</span>
                <input type="text" name="update_lastname" value="<?php echo $fetch['LastName']; ?>" class="box">
                <span>Your email :</span>
                <input type="email" name="update_email" value="<?php echo $fetch['Email']; ?>" class="box">
            </div>
            <div class="inputBox">
                <span>Mobile Number :</span>
                <input type="text" name="update_mobile" value="<?php echo $fetch['Mobile']; ?>" class="box">
                <span>Address :</span>
                <input type="text" name="update_address" value="<?php echo $fetch['Address']; ?>" class="box">
                <span>Post :</span>
                <input type="text" name="update_post" value="<?php echo $fetch['UserType']; ?>" class="box">
            </div>
        </div>
        <input type="submit" value="Update Profile" name="update_profile" class="btn">
        <a href="AdminStaffView.php" class="delete-btn">Go Back</a>
    </form>
</div>
</body>
</html>
