

<nav>

   <?php if ($page == 'home') { ?>
   <li><a href="home.php" class="active">Home</a></li>
<?php } 

else 
    { ?><li><a href="home.php">Home</a><?php } ?>

    <?php if ($page == 'contact') { ?>
    <li><a href="contact.php" class="active">Blog</a></li>
<?php } 

else 
    { ?><li><a href="contact.php">Blog</a><?php } ?> 
    


</nav>