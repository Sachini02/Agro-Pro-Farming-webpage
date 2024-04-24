<header class="header">
<nav>
        <img src="image/LOG.jpg" class="logo">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="learnmore.php">about us</a></li>
            <li><a href="logout.php">Logout</a></li>

       <?php 
       
       $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
       $row_count = mysqli_num_rows($select_rows);
       
       ?>

            <li><a href="cart.php">Cart <span><?php  echo $row_count;  ?></span></a><li>
        </ul>
       </nav>

       

</header>