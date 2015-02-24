

<?php $page = 'contact'; ?>


<!DOCTYPE html>
   
   <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Opdracht 2</title>
    </head>
    
 <style>
     
  a{
        display:block;
        color:#FFF;
        text-decoration:none;
        width:100px;
        height:20px;
        text-align:center;
        background-color:#0055ac;
        margin-bottom:5px;
    }
    .active{
       background-color:#11aa00;
        
    }
    </style>
    
    <body>        
        <h1>Opdracht 2</h1>
        <?php
            include ("include_navigation.php");
            
        ?>
        
        <div class="content">this is the Contactpage</div>
        
        <?php

            include ("include_footer.php");
        ?>
   
    </body>
    
</html>