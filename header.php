
<header class="header">
<link rel="stylesheet" href="css/style.css">

   <div class="flex">

      <a href="#" class="logo">BASH RESTURANT</a>

      <nav class="navbar">
      <a href="Home.php">Home</a>
         <a href="products.php">view products</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>


   </div>

</header>
