<!DOCTYPE html >
<html>
	<head>
	
		<link rel="stylesheet" href="styles/styles.css">
		<title>My Shopping Cart</title>

        <style type="text/css"> h2,h3{text-align: center;}</style>
	</head>

	<body>
		<img src="images/image.jpg" alt="Shopping Cart Logo" width="200px" height="200px" class="logo">
		<h2 style="text-align:center">Shopping Cart</h2>
		<p><h3 style="text-align:center">The online shopping store</h3></p>
		<hr class="hr1">
		<ul class="ul1">
			<li class="li1"><a href="index.html">Home</a></li>
			<li class="li1"><a href="news.html">News</a></li>
			<li class="li1"><a href="register.html">Contact</a></li>
			<li class="li1"><a href="aboutus.php">About us</a></li>
		</ul>
<div>
        <?php

            define("CompanyName","ABC Mobiles");

            echo "<h2>About ".CompanyName."</h2>";

            echo"<h3>This is mainly about the ".CompanyName."</h3>";

            $sold=75;
            $total=100;

            echo "<h2>The Shopping Cart</h2>";
            echo "Number of sold items : ".$sold."<br>";
            echo "Number of total items : ".$total."<br>";

            function findPercentage(){
                $GLOBALS['percentage'] = $GLOBALS['sold']/$GLOBALS['total']*100;

            }

            findPercentage();

            echo "<h3>Percentage of sold items : ".$percentage."%<br></h3>";

            $Today="<h2>Today is the ".date("l")."</h2>";
            echo $Today;

            $c=date("Y-m-d");
            $today=date_create($c);

            $status;
            $shipday=date_create("2019-09-21");

            $diff=date_diff($today,$shipday);

            echo "<h2><br>Remaining no of days for shipping is ".$diff->format("%R%a days")."<br></h2>";

            if($diff->format("%R%a")>0){
                $status="Shipping will be available soon";
            }


            else{
                $status="Shipped";
            }

            echo "<h2>for ".$c.", 36 items has ".$status."</h2>";

            echo "<br>";

            #loop functions

            function loopUsingFor() {
                $items = array("Iphone Xs"=>"27", "Iphone X"=>"30", "Iphone XS Max"=>"12","Iphone XR"=>"29");
                $keys = array_keys($items);
                echo "<h2>Output Using For Loop<br></h2>";
                echo "<h2><table border = '2' width='75%'><tr><th><center>Item Name</center></th><th><center>Number of Items<center></th></tr>";
                for($x = 0; $x < count($keys); $x++){
                    echo "<tr><td><center>".$keys[$x]."</center></td><td><center>".$items[$keys[$x]]."</center></td></tr>";
                }

                echo "</table><br>";
            }
    
            loopUsingFor();

            function loopUsingForEach() {
                $items = array("Iphone Xs"=>"27", "Iphone X"=>"30", "Iphone XS Max"=>"12","Iphone XR"=>"29");
                
                echo "<h2>Output Using For Each Loop<br></h2>";
                echo "<h2><table border = '2' width='75%'><tr><th><center>Item Name</center></th><th><center>Number of Items<center></th></tr>";
                foreach($items as $x =>  $x_value){
                    echo "<tr><td><center>".$x."</center></td><td><center>".$x_value."</center></td></tr>";
                }

                echo "</table><br>";
            }

            loopUsingForEach();

            function loopUsingWhile() {

                $items = array("Iphone Xs"=>"27", "Iphone X"=>"30", "Iphone XS Max"=>"12","Iphone XR"=>"29");
                $keys = array_keys($items);
                $i=0;
                echo "<h2>Output Using While Loop<br></h2>";
                echo "<h2><table border = '2' width='75%'><tr><th><center>Item Name</center></th><th><center>Number of Items<center></th></tr>";
                while($i < count($keys)){
                    echo "<tr><td><center>".$keys[$i]."</center></td><td><center>".$items[$keys[$i]]."</center></td></tr>";
                    $i++;
                }

                echo "</table><br>";
            }

            loopUsingWhile();

            function loopUsingDoWhile() {
                $items = array("Iphone Xs"=>"27", "Iphone X"=>"30", "Iphone XS Max"=>"12","Iphone XR"=>"29");
                $keys = array_keys($items);
                $i=0;
                echo "<h2>Output Using Do While Loop<br></h2>";
                echo "<h2><table border = '2' width='75%'><tr><th><center>Item Name</center></th><th><center>Number of Items<center></th></tr>";
                do{
                    echo "<tr><td><center>".$keys[$i]."</center></td><td><center>".$items[$keys[$i]]."</center></td></tr>";
                    $i++;
                }while($i < count($keys));

                echo "</table><br>";
            }

            loopUsingDoWhile();


            ?>

        </div>

        <hr>
		
		<footer align="center">
			<p> Created by:Kuli </p>
			<p><a href="https://www.w3schools.com/">Click here to learn more </a> 
	</body>
<html>	









  