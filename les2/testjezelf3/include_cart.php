<?php

 include ("include_products.php");
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
   
   <h3>Products in your cart:</h3>
   
  
        <ul>
           
            <?php
            foreach($arr_products as $p)
            {?>  
            <li>Product :<?php echo $p['name'] ?> € <?php echo $p['price']?></li>
            <?php
            }
            ?>   
        </ul>     
</body>
</html>