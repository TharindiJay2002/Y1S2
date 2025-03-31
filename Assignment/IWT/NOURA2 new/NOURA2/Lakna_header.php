<?php

include 'config.php';

?>

<header class="header">

<link rel="stylesheet" href="Lakna_style.css">

   <div class="flex">

      <a href="#" class="logo"><b>NOURA</b></a>

      <nav class="navbar">
         <a href="Lakna_Designer.php">add products</a>
         <a href="Lakna_product.php">view products</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM products") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

   </div>

</header>