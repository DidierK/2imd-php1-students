
<?php

    include("include_products.php");

    session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<body>
   <style>
        li{
             font-weight:bold;   
        }
    </style>
   
   
    <ul>
       
  
            

            
        <?php for($i=0; $i<$aantal; $i++)
            {?>
            <li><?php echo $arr_products[$i]["name"]?> € <?php echo $arr_products[$i]["price"]?>
            <br>
            <img src="<?php echo $arr_products[$i]['picture']; ?>" alt="product">
            <?php echo "<a href='productdetail.php?id=" . $i . "'>" . "More info" . "</a>";
        }?>
            
            
    </ul>
    

    
    <?php
        include ("include_cart.php");
    ?>
    

    
</body>
</html>