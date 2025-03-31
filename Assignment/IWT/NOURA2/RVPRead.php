<?php
    require 'config.php';
    include 'header.php';
?>

<html>
    <head>
    <link rel="stylesheet" href="RVPreview.css">


    <style>
        td{
            color:red;
            text-style:bold;
            font-size:20px;
            background-color:white;
            text-align: center;
        }
        th{
            background-color:silver;
            text-style:bold;
            font-size:20px;
            text-align: center;
        }

        .btnA{
            text-decoration:none;
            color:black;
            font-size:30px;
            background-color:gray;
            margin-left:700px;
            text-align: center;
            
        }

        .btn1
        {
            text-decoration:none;
            color:black;
            font-size:15px;
        }

        .btn1 a:hover
        {
            color:red
        }
        table{
            margin-top:25px;
        }

        nav{
            width: 95%;
        }
    </style>


    </head>


    <body>
        <br>
        <br>
        <br>
        <br>
        <br>
        
<?php

$sql="SELECT uid , Name , ReviewTitle , Description , Rating FROM  review";

$result=$conn->query($sql);

if($result->num_rows>0)
{
    echo "<table border='5'>";
        
        echo "<tr>";
        echo "<th>".'Name'."</th>"."<th>".'Review id'."<th>".'ReviewTitle'."</th>"."<th>".'Description'."</th>"."<th>".'Rating'."</th>"."<th>".''."</th>"."<th>".''."</th>"."<br>";
        echo "</tr>";

    while($row=$result->fetch_assoc())
    {

        echo "<tr>";
        echo "<td>".$row["Name"]."</td>"."<td>".$row["uid"]."<td>".$row["ReviewTitle"]."</td>"."<td>".$row["Description"] ."</td>"."<td>".$row["Rating"]."</td>"."<br>";
        
        echo "<td><a class='btn1' href='RVPupdate.php?id=".$row["uid"]." '>Edit</a></td>";
        echo "<td><a class='btn1' onclick='return checkdelete()' href='RVPdelete.php?id=".$row["uid"]." '>Delete</a></td>";
             

    }

}
else
{
    echo "No Result";
}
    $row=$result->fetch_assoc();
    echo "<a class='btnA' href='RVPinsert.php'>Add Review</a>";
    
$conn->close();
?>

</form>


<?   //Java Script  ?>

<script src=newuser.js></script>

</body>
</html>




