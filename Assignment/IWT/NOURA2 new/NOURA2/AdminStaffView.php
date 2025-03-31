<?php 
   
   include 'AdminHeader.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My shop</title>
    <link rel="stylesheet" href="RVPreviewStyle.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container my-5">
        <h2>List of Customers</h2>
        <a class="btn btn-primary" href="AdminStaffAdd.php" role="button">New Staff Member</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Post</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "user_info";

                // Create connection 
                $connection = new mysqli($servername, $username, $password, $database);

                // Check connection
                if ($connection->connect_error) {
                    die("Connection Failed: " . $connection->connect_error);
                }

                // Read all rows from the database table
                $sql = "SELECT * FROM users WHERE UserType='admin'||UserType='designer'";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }

                // Read data of each row
                while ($row = $result->fetch_assoc()) {?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['FirstName']?></td>
                        <td><?php echo $row['Email']?></td>
                        <td><?php echo $row['Mobile']?></td>
                        <td><?php echo $row['Address']?></td>
                        <td><?php echo $row['UserType']?></td>
                        <td>
                            <a class='btn btn-primary btn-sm' href="AdminStaffEdit.php?id=<?php echo $row['id'] ?>">Edit</a>
                            <a class='btn btn-danger btn-sm' onclick='return checkdelete()' href="AdminStaffDelete.php?id=<?php echo $row['id']?> ">Delete</a>
                        </td>
               <?php } ?>

            </tbody>
        </table>
    </div>

    <script src=Admin.js></script>



</body>
</html>
