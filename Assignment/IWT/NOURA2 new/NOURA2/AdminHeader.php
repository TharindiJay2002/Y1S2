<?php
   session_start();
?>

<!DOCTYPE html>
<html>

  <head>

    
    <title> NOURA FASHION </title>
	
	<link rel="stylesheet" href="AdminHeader.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /</head>
	</head>
    <body>
	
	<nav>
    <div class="logo"> <a href="AdminHome.php"> NOURA </a> </div>

	<ul class="menu"> 
	  <li class="menu"><a href="Lakna_Designer.php">Products</a></li>
	  <li class="menu"><a href="AdminStaffView.php">Staff</a></li>  
	  <li class="menu"><a href="AdminCustomerRead.php">Customers</a></li>
	  <li class="menu"><a href="about us.php">About Us</a></li>
	  <li class="menu"><a href=""></a></li>
	</ul>
	
	<div class="search">
	  <form>
	      <input type="text" placeholder="  Search">
		  <button type="submit"> Search </button>
	  </form>
    </div>
	 
	<div class="account">
	<?php if(isset($_SESSION["username"])){ ?>
		 <a class="log" href="profile.php"> ACCOUNT </a>
		 <a class="log" href="Logout.php"> LOGOUT </a>
         <div class ="userna"><?=$_SESSION["username"] ?></div>
		<?php } else { ?>
		<div class="account"> <a href="Login.php"> LOGIN </a>
		<a href="Register.php"> SIGN UP </a>	  
		<?php }?>

	 
	 
<i class="fa-solid fa-user-large"></i> <o> | </o> <a href="cart.html">  <dij class="cart"> <i class="fa-solid fa-cart-shopping"></i> </dij> </a> </div>
	
	</nav>

	<br>
	<br>
	<br>
	
</body>
    </html>