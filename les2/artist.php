
<?php

include ("artiest.php");

    //haal artist id uit url

    $artist_id = $_GET['id'];

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artist ... </title>
</head>
<body>
    
    <h1><?php echo $arr_artists[$artist_id]['name']; ?></h1>
    <img src="<?php echo $arr_artists[$artist_id]['picture']; ?>" alt="Artist name">
    
    <a href="toepassing1.php">Terug naar begin</a>
    
</body>
</html>