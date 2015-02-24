<?php

    include ("include_products.php");

    
  $product_id = $_GET['id'];

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Productdetail</title>
</head>
<body>
   
    <a href="products.php">Return to Shop</a>
    
    <p><?php echo $arr_products[$product_id]['name']; ?></p>
    
    <img src="<?php echo $arr_products[$product_id]['picture']; ?>" alt="">
    
    <button type="submit">Buy Now</button>
    
    <br>
    
    <?php
        include("include_cart.php");
    ?>
    
</body>
</html>